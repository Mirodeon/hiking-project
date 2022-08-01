<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Profile - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<div class="hero-body">
    <section class="container">
        <div class="column is-half is-offset-one-quarter has-text-centered">
            <article class="panel is-primary">
                <p class="panel-heading">User profile</p></br>
                <div class="blabla">
                    <div class="field">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                        firstname: <?php echo $_SESSION["user"]["firstname"]; ?>
                    </div>
                    <div class="field">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                        lastname: <?php echo $_SESSION["user"]["lastname"]; ?>
                    </div>
                    <div class="field">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                        login: <?php echo $_SESSION["user"]["login"]; ?>
                    </div>
                    <div class="field">
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        email: <?php echo $_SESSION["user"]["email"]; ?>
                    </div></br>
                    <button class="button is-light">Update</button>
                    <a href="userManage"><button class="button">Users manager</button></a>
                    <a href="hikeManage"><button class="button">Hikes manager</button></a>
                </div></br>
            </article>
        </div>
    </section>
    </br>
    <?php include "footer.php"; ?>