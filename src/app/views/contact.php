<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    $title = "Contact - " . $_SESSION["user"]["login"];
} else {
    $title = "Contact";
} ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>


<?php include "footer.php"; ?>