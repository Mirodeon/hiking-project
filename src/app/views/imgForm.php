<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: login");
    $_SESSION['error'] = "You need to be logged in to access this part.";
    exit();
} ?>

<?php $title = "Add an image - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box" action="">
                    <div class="field">
                        <label for="name" class="label is-small">Image URL</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="URL here" name="img-url" id="img_preview">
                        <span class="icon is-small is-left">
                            <i class="fa fa-image"></i>
                        </span>
                    </div>
                    <div>
                        <img src="" alt="image preview" style="width: 150px;" id="img_prev">
                    </div>
                    </br>
                    <button class="button is-light is-small" id="btn">Preview</button>
                    <button class="button is-success is-small" type="submit" name="submit" value="confirm">Confirm</button>
            </div>
            </form>
            <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
        </div>
    </div>
</div>

<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>

