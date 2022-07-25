<?php $title = "Register"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box">
                    <div class="field">
                        <label for="firstname" class="label is-small">Firstname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="firstname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="lastname" class="label is-small">Lastname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Lastname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="email" class="label is-small">Email</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="email" class="input is-small" placeholder="Email adress">
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="username" class="label is-small">Username</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Username">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="pass" class="label is-small">Password</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small" placeholder="Password">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div></br>
                    <div class="field">
                        <button class="button is-success is-small">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>