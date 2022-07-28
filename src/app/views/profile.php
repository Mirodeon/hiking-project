<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Profile - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
</br>
<div class="hero-body">
<section class="container" >
    <div class="column is-half is-offset-one-quarter has-text-centered" >
        <article class="panel is-primary" >
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
                <button class="button is-light">Update</button>
            </div></br>
            <!-- <div class="blabla column is-half is-offset-one-quarter">
                <form method="post" class="" action="signup">
                    <div class="field">
                        <label for="firstname" class="label is-small">Firstname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="<?php echo $_SESSION["user"]["firstname"]; ?>" name="firstname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="lastname" class="label is-small">Lastname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="<?php echo $_SESSION["user"]["lastname"]; ?>" name="lastname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="email" class="label is-small">Email</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="email" class="input is-small" placeholder="<?php echo $_SESSION["user"]["email"]; ?>" name="email">
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="login" class="label is-small">Login</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="<?php echo $_SESSION["user"]["login"]; ?>" name="login">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="pass" class="label is-small">New password</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="New password" name="pass">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div></br>
                    <button class="button is-primary">Submit</button>
                    <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </form>
                </br>
            </div> -->
        </article>
    </div>

</section>

</br>
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