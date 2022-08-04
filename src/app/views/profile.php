<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Profile - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>


<div class="hero-body" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
    <div class="container column is-half is-offset-one-quarter has-text-centered">
        <article class="panel is-primary has-background-white">
            <p class="panel-heading">User profile</p></br>
            <div class="blabla">
                <div class="field">
                    <span class="icon is-small is-left">
                        <i class="fa fa-user-o"></i>
                    </span>
                    firstname: <?php echo $_SESSION["user"]["firstname"]; ?>
                </div>
                <div class="field">
                    <span class="icon is-small is-left">
                        <i class="fa fa-user-o"></i>
                    </span>
                    lastname: <?php echo $_SESSION["user"]["lastname"]; ?>
                </div>
                <div class="field">
                    <span class="icon is-small is-left">
                        <i class="fa fa-sign-in"></i>
                    </span>
                    login: <?php echo $_SESSION["user"]["login"]; ?>
                </div>
                <div class="field">
                    <span class="icon is-small is-left">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    email: <?php echo $_SESSION["user"]["email"]; ?>
                </div></br>
                <form method="post" action="editProfile">
                    <button class="button is-light" type="submit" name="edit" value="<?= $_SESSION['user']['id']; ?>">Update</button>
                    <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </form>
                <?php include '../app/controllers/managementBtn.php'; ?>
            </div></br>
        </article>
    </div>
</div>

<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>