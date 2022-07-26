<?php session_start(); ?>
<?php $title = "404"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered tile is-parent is-vertical">
                <div class="block">
                    <p class="has-text-centered">Error 404</p>
                    <p class="has-text-centered">Page not found</p>
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
<?php include "footer.php"; ?>