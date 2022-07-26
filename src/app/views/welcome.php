<?php session_start(); ?>
<?php $title = "Welcome". $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
Welcome <?php echo $_SESSION["user"]["firstname"] ." ". $_SESSION["user"]["lastname"] ?><br>
You're now register as <?php echo $_SESSION["user"]["login"]; ?><br>
Your email address is: <?php echo $_SESSION["user"]["email"]; ?>
<?php include "footer.php"; ?>