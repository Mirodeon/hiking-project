<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Profile - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<section class="container">
    <div class="column is-half is-offset-one-quarter has-text-centered">
        <article class="panel is-primary">
            <p class="panel-heading">User profile</p>
            <div class="panel-block"></div>
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
            </div>
            <div class="is-centered">
            <button class="button is-light">Update</button>
            <button class="button is-primary">Submit</button>
            </div>
            <div class="panel-block"></div>
        </article>
    </div>
</section>

<?php include "footer.php"; ?>






















<!-- <a class="panel-block is-active">
    <span class="panel-icon">
        <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    bulma
</a>
<a class="panel-block">
    <span class="panel-icon">
        <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    marksheet
</a>
<a class="panel-block">
    <span class="panel-icon">
        <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    minireset.css
</a>
<a class="panel-block">
    <span class="panel-icon">
        <i class="fas fa-book" aria-hidden="true"></i>
    </span>
    jgthms.github.io
</a> -->