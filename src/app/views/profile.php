<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Profile - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<p>firstname: <?php echo $_SESSION["user"]["firstname"]; ?></p>
<p>lastname: <?php echo $_SESSION["user"]["lastname"]; ?></p>
<p>login: <?php echo $_SESSION["user"]["login"]; ?></p>
<p>email: <?php echo $_SESSION["user"]["email"]; ?></p>
<?php include "footer.php"; ?>