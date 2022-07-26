<?php session_start(); ?>
<?php $title = "Welcome ". $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<p>Welcome <?php echo $_SESSION["user"]["firstname"] ." ". $_SESSION["user"]["lastname"] ?><br>
You're now register as <?php echo $_SESSION["user"]["login"]; ?><br>
Your email address is: <?php echo $_SESSION["user"]["email"]; ?><br>
<?php echo $_SESSION["user"]["id"];
print_r($_SESSION);
if( isset($_SESSION['user']) ) { 
    echo 'La session est définie.' ; 
  } 
  else { 
    echo 'Les variables de session ont été supprimées'; 
  } ; 
/*session_destroy();*/?> </p>
<?php include "footer.php"; ?>