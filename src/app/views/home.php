<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
  $title = "Home - " . $_SESSION["user"]["login"];
} else {
  $title = "Home";
} ?>
<?php
require "parts/head.php";
include 'header.php';

$db = new MyPDO();
?>

<style>
  .hike-list {
    padding-top: 10px;
  }
  .hike-name {
    margin-top: -15px;
  }
  .banner {
    padding: 0;
  }
  a {
        text-decoration: none;
        color: black;
    }
</style>

<section class="section banner" style="background-image: url('./img/mountain.jpg'); background-size: cover;">
  <div class="container hero-body ">
    <div class="columns is-centered">
      <div class="column is-half">
        <p class="has-text-centered is-size-2 has-text-weight-bold has-text-white" style="text-shadow: 1px 1px 3px black;">Find your next hike</p>
        <form action="" method="post">
        <p class="control has-icons-left">
          <input class="input is-info is-rounded" type="search" placeholder="Hike search" name="search">
          <span class="icon is-left">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
          <button class="button is-rounded">Search!</button>
        </p>
        </form>
      </div>
    </div>

    <?php include 'parts/dropDownTag.php'; ?>

  </div>
</section>

<section class="section hike-list has-background-light">
  <p class="is-size-4 has-text-weight-bold">Last four</p></br>
  <div class="columns is-centered">

  <?php include 'fourHikes.php'; ?>

  </div>
</section>

<?php include 'footer.php'; ?>