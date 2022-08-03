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
            <div class="column is-half">
                <article class="panel is-success">
                    <p class="panel-heading has-text-centered">Contact us</p>
                    <p>ABOUT US
                        Our goal is to bring you closer to places and people that would otherwise seem foreign by providing guides to studying languages, understanding culture, and living in unfamiliar places.</p>
                </article>
            </div>
            <article class="panel is-success">
                <p class="panel-heading has-text-centered">Contact us</p>
                <div class="column" style="background-image: url('./img/mail_image.jpg'); background-repeat: no-repeat; background-size:cover; height:150px"></div>
                <div class="column">
                    <form action="sendContact" method="post">
                        <div class="field">
                            <label class="label">Firstname</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Firstname" name="firstname">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Lastname</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Lastname" name="lastname">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Email adress" name="email" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Subject</label>
                            <div class="control">
                                <div class="select">
                                    <select name="subject">
                                        <option>Select a subject</option>
                                        <option value="User">Users</option>
                                        <option value="Hike">Hikes</option>
                                        <option value="Website">Website</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Message</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Your message" name="message" spellcheck="false"></textarea>
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link" type="submit">Submit</button>
                            </div>
                            <div class="control">
                                <button class="button is-link is-light" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </section>
</div>

<?php include "footer.php"; ?>