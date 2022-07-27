<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Login"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box" action="login">
                    <div class="field">
                        <label for="username" class="label is-small">Username</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Username" name="login">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="pass" class="label is-small">Password</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Password" name="pass">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div></br>
                    <div class="field">
                        <button class="button is-success is-small" type="submit" name="submit" value="login">Login</button>
                    </div>
                    <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>