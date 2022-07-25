<?php

// open the $_SESSION
session_start();

if (!empty($_POST)) {
    // 1. Check all the inputs exist
    // 2. We check also if the $_POST are not empty because we load the page, the form is empty
    if (
        isset($_POST["login"], $_POST["pass"])
        && !empty($_POST["login"]) && !empty($_POST["pass"])
    ) {

        $login = strip_tags($_POST["login"]);

        //SQL part
        require_once "connexion.php";
        $q = $db->prepare("SELECT * FROM users WHERE login=:login");

        // bindParam() accepte uniquement une variable qui est interprétée au moment de l'execute()
        $q->bindParam(":login", $login, PDO::PARAM_STR);

        // exexute return a boolean
        if (!$q->execute()) {
            die("form not sent to the db");
        }

        $user = $q->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            die("user doesn't exist &/or password incorrect");
        }

        // check the password input with the password in db
        if (!password_verify($_POST["pass"], $user["password"])) {
            die("user doesn't exist &/or password incorrect");
        }


        // store data of user in $_SESSION
        $_SESSION["user"] = [
            "id" => $user["id"],
            "login" => $user["login"],
            "email" => $user["email"]
        ];

        header("location: index.php");
    }
}

?>
<?php $title = "Login"; ?>
<?php require "parts/head.php"; ?>
<script src="https://kit.fontawesome.com/de0135f311.js" crossorigin="anonymous"></script>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box">
                    <div class="field">
                        <label for="login" class="label">Login</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your login">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="pass" class="label">Password</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your password">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="field">
                        <button class="button is-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>