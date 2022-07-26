<?php $title = "Welcome". $_POST["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
Welcome <?php echo $_POST["firstname"] ." ". $_POST["lastname"] ?><br>
You're now register as <?php echo $_POST["login"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php include "footer.php"; ?>