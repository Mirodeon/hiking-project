<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: login");
    $_SESSION['error'] = "You need to be logged in to access this part.";
} ?>
<?php $title = "Menu - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="navbar-item">
    <div class="buttons">
        <a class="button is-primary is-small" href="addHike">
            <strong>Add a hike</strong>
        </a>
        <a class="button is-primary is-small" href="myHike">
            <strong>My hikes</strong>
        </a>
    </div>
</div>
<?php include "footer.php"; ?>