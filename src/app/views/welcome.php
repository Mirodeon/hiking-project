<?php session_start(); ?>
<?php /*if (isset($_SESSION["user"])) {
    header("location: home");
} */ ?>
<?php $title = "Welcome - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<style>
  .flex {
    display: flex;
    justify-content: center;
  }
</style>
<div class="hero-body flex" style="background-image: url('./img/mountain.jpg'); background-size: cover; height:100%;">
  <div class="box" style="width:fit-content">
  <div class="column" style="background-image: url('./img/mail_image.jpg'); background-repeat: no-repeat; background-size:cover; height:150px"></div><br>
    <p class="has-text-centered title is-4">Welcome <?php echo $_SESSION["user"]["firstname"] . " " . $_SESSION["user"]["lastname"]; ?></p>
    <p class="has-text-centered">You're now register as <?php echo $_SESSION["user"]["login"]; ?></p>
    <p class="has-text-centered">Your email address is: <?php echo $_SESSION["user"]["email"]; ?></p><br>
    <p class="has-text-centered title is-5">Enjoy your visit !</p>
  </div>
</div>
<?php
//print_r($_SESSION);
if (isset($_SESSION['user'])) {
  echo 'La session est définie.';
} else {
  echo 'Les variables de session ont été supprimées';
};
/*session_destroy();*/ ?> </p>
<?php include "footer.php"; ?>