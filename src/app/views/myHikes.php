<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: login");
    $_SESSION['error'] = "You need to be logged in to access this part.";
} ?>
<?php $title = "My Hikes - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<?php include "footer.php"; ?>