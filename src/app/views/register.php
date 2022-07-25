<?php $title = "register"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box">
                    <div class="field">
                        <label for="firstname" class="label">Firstname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your firstname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="lastname" class="label">Lastname</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your lastname">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="email" class="input" placeholder="Your email adress">
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="login" class="label">Login</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your login">
                        <span class="icon is-small is-left">
                            <i class="fa fa-sign-in"></i>
                        </span>
                    </div>
                    <div class="field">
                        <label for="pass" class="label">Password</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input" placeholder="Your password">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div></br>
                    <div class="field">
                        <button class="button is-success">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>