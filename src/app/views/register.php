<?php
session_start();
if (!empty($_POST)) {
    if (
        isset($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["login"], $_POST["pass"]) &&
        !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) &&
        !empty($_POST["login"]) && !empty($_POST["pass"])
    ) {
        $firstname = strip_tags($_POST["firstname"]);
        $lastname = strip_tags($_POST["lastname"]);
        $login = strip_tags($_POST["login"]);
        $permission = "utilisateur";
        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
            die("email invalid");
        }
        $pass = password_hash($_POST["pass"], PASSWORD_BCRYPT);
        require_once 'models/MYPDO.php';
        $db = new MyPDO();
        $q = $db->prepare("INSERT INTO `users`(`firstname`, `lastname`, `nickname`, `email`, `password`, `permission`) 
        VALUES (:firstname, :lastname, :nickname, :email, :pass, :permission)");
        $q->bindParam(":firstname", $firstname, MyPDO::PARAM_STR);
        $q->bindParam(":lastname", $lastname, MyPDO::PARAM_STR);
        $q->bindParam(":nickname", $login, MyPDO::PARAM_STR);
        $q->bindParam(":email", $_POST["email"], MyPDO::PARAM_STR);
        $q->bindParam(":pass", $pass, MyPDO::PARAM_STR);
        $q->bindParam(":permission", $permission, MyPDO::PARAM_STR);
        if (!$q->execute()) {
            die("<script>alert('Post to db Failed.')</script>");
            if (!$db) {
                die("<script>alert('Connection Failed.')</script>");
            }
        }
        $id = $db->lastInsertId();
        $_SESSION["user"] = [
            "id" => $id,
            "firstname" => $firstname,
            "lastname" => $lastname,
            "login" => $login,
            "email" => $_POST["email"]
        ];
    } else {
        die("form incomplete");
    }
}
?>
<?php $title = "Register"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box" action="welcome">
                    <div class="field">
                        <label for="firstname" class="label">Firstname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your firstname" name="firstname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="lastname" class="label">Lastname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your lastname" name="lastname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="email" class="input" placeholder="Your email adress" name="email">
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="login" class="label">Login</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your login" name="login">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="pass" class="label">Password</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your password" name="pass">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div></br>
                    <div class="field">
                        <button class="button is-success" type="submit" name="register">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>