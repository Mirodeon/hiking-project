<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    $title = "Hike - " . $_SESSION["user"]["login"];
} else {
    $title = "Hike";
} ?>
<?php require "parts/head.php"; ?>
<?php echo $_SESSION["hike"]["id"]; ?><br>
<?php include 'header.php'; ?>
<?php include "footer.php"; ?>