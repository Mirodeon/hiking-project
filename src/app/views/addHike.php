<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: login");
    $_SESSION['error'] = "You need to be logged in to access this part.";
    exit();
} ?>
<?php $title = "Add a Hike - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box" action="addHike">
                    <div class="field">
                        <label for="name" class="label is-small">Name</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Hike name" name="name">
                        <span class="icon is-small is-left">
                            <i class="fa fa-blind"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="distance" class="label is-small">Distance: km</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="number" class="input is-small" placeholder="Hiking distance" name="distance" min="0" step="0.1">
                        <span class="icon is-small is-left">
                            <i class="fa fa-globe"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="durationH" class="label is-small">Duration: hours</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="number" class="input is-small" placeholder="Hours" name="durationH" min="0" step="1">
                        <span class="icon is-small is-left">
                            <i class="fa fa-clock-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="durationM" class="label is-small">Duration: minutes</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="number" class="input is-small" placeholder="Minutes" name="durationM" min="0" max="59" step="1">
                        <span class="icon is-small is-left">
                            <i class="fa fa-clock-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="elevation" class="label is-small">Elevation: m</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="number" class="input is-small" placeholder="Elevation gain of the hike" name="elevation" min="0" step="1" >
                        <span class="icon is-small is-left">
                            <i class="fa fa-line-chart"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="description" class="label is-small">Description</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Description of the hike" name="description">
                        <span class="icon is-small is-left">
                            <i class="fa fa-commenting"></i>
                        </span>
                    </div></br>
                    <div class="field">
                        <button class="button is-success is-small" type="submit" name="submit" value="addHike">Add a Hike</button>
                    </div>
                    <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>