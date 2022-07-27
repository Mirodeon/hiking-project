<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Register"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box" action="signup">
                    <div class="field">
                        <label for="firstname" class="label is-small">Firstname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Your firstname" name="firstname" autocomplete="off">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="lastname" class="label is-small">Lastname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Your lastname" name="lastname" autocomplete="off">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="email" class="label is-small">Email</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="email" class="input is-small" placeholder="Your email adress" name="email" autocomplete="off">
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="login" class="label is-small">Login</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Your login" name="login" autocomplete="off">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="pass" class="label is-small">Password</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="password" class="input is-small" placeholder="Your password" name="pass" autocomplete="off">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div></br>
                    <div class="field">
                        <button class="button is-success is-small" type="submit" name="submit" value="register">Sign up</button>
                    </div>
                    <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>
