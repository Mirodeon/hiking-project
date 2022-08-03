<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    $title = "404 - " . $_SESSION["user"]["login"];
} else {
    $title = "404";
} ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered tile is-parent is-vertical">
                <div class="block">
                    <p class="has-text-centered">Error 404</p>
                    <p class="has-text-centered">Page not found</p>
                    <p class="label has-text-danger has-text-centered"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </div>
                <div class="image is-64x64 is-clickable block is-centered" style="margin: 0 auto;">
                    <a href="home" title="home">
                        <img src="./img/back-button.png" alt="back-button">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>