<?php session_start(); ?>
<?php $title = "Home"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<section class="section" style="background-image: url('./img/mountain.jpg'); background-size: cover;">
  <div class="container hero-body">
    <div class="columns is-centered">
      <div class="column is-half">
      <p class="has-text-centered is-size-2 has-text-weight-bold has-text-white" style="text-shadow: 1px 1px 3px black;">Find your next hike</p>
      <p class="control has-icons-left">
          <input class="input is-info is-rounded" type="text" placeholder="Hike search">
          <span class="icon is-left">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
        </p>
      </div>
    </div>
  </div>
</section>


<!-- 

<section class="hero is-medium is-success" style="background-image: url('./img/mountain.jpg'); background-size: cover;">
  


<div class="hero-body">
    <p class="has-text-centered is-size-1 has-text-weight-bold" style="text-shadow: 1px 1px 3px grey;">Find your next hike</p>
    <div class="column" style="width: 300px;">
      <div class="panel-block">
        <p class="control has-icons-left">
          <input class="input is-info is-rounded" type="text" placeholder="Hike search">
          <span class="icon is-left">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
        </p>
      </div>
    </div>
  </div>
</section> -->


<!-- <div class="tile is-ancestor">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-primary">
          <p class="title">Vertical...</p>
          <p class="subtitle">Top tile</p>
        </article>
        <article class="tile is-child notification is-warning">
          <p class="title">...tiles</p>
          <p class="subtitle">Bottom tile</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-info">
          <p class="title">The Hiking Project</p>
          <p class="subtitle">Trail guide</p>
          <figure class="image is-4by3">
            <img src="img/rando.jpg">
          </figure>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-danger">
        <p class="title">Wide tile</p>
        <p class="subtitle">Aligned with the right tile</p>
        <div class="content">
        </div>
      </article>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-success">
      <div class="content">
        <p class="title">Tall tile</p>
        <p class="subtitle">With even more content</p>
        <div class="content">
        </div>
      </div>
    </article>
  </div>
</div> -->
</section>
<?php include 'footer.php'; ?>