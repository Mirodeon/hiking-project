<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    $title = "Contact - " . $_SESSION["user"]["login"];
} else {
    $title = "Contact";
} ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<div class="hero-body">
    <section class="container flex center">
        <div class="columns is-centered">
            <article class="panel is-success">
                <p class="panel-heading has-text-centered">Contact us</p>
                <div class="column" style="background-image: url('./img/mail_image.jpg'); background-repeat: no-repeat; background-size:cover; height:150px"></div>
                <div class="column">
                    <div class="field">
                        <label class="label">Firstname</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="Firstname">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Lastname</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="Lastname">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="email" placeholder="Email input">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Subject</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option>Select a subject</option>
                                    <option>Users</option>
                                    <option>Hikes</option>
                                    <option>Website</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                        </div>
                        <div class="control">
                            <button class="button is-link is-light">Cancel</button>
                        </div>
                    </div>
                </div>

            </article>
        </div>
    </section>
</div>

<?php include "footer.php"; ?>