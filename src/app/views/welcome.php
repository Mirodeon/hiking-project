<?php $title = "Welcome"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
Welcome <?php echo $_POST["login"]; ?><br>
<?php echo $_POST["firstname"] ." ". $_POST["lastname"] ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php include "footer.php"; ?>