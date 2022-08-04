<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    $title = "Contact - " . $_SESSION["user"]["login"];
} else {
    $title = "Contact";
} ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<style>
    .box {
        display: flex;
        justify-content: space-between;
    }
</style>
<div class="hero-body has-background-light" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
    <section class="container flex center">
        <div class="columns is-centered">
            <div class="column">
                <article class="panel is-link has-background-white">
                    <p class="panel-heading has-text-centered">About us</p>
                    <div class="column">
                        <p>For millions of people, Elderberry is the key to the great outdoors. From intrepid explorers and experienced off-roaders, to those who just bought their first road bike, our technology allows everybody to better find, plan and live authentic outdoor experiences, we built Elderberry for this very reason</p><br>
                        <article class="message is-success">
                            <div class="message-body">
                                <p><em>"I believe that every day spent outside exploring is a valuable day; more valuable than anything you can buy. At the end of your life you will look back not on the things you owned but on the things you experienced"</em></p>
                                <p style="text-align: right;">Jonas Spengler</p>
                            </div>
                        </article>                        
                    </div>
                </article>
                <div class="box">
                    <div id="donate-button-container">
                        <div id="donate-button"></div>
                        <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                        <script>
                            PayPal.Donation.Button({
                                env: 'production',
                                hosted_button_id: 'KUXTHQWZDTXCW',
                                image: {
                                    src: 'https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif',
                                    alt: 'Donate with PayPal button',
                                    title: 'PayPal - The safer, easier way to pay online!',
                                }
                            }).render('#donate-button');
                        </script>
                    </div>

                    <p><strong>Thanks for supporting us</strong></p>
                    <p><a href=""><span class="icon-text">
                                <span class="icon">
                                    <i class="fa-brands fa-twitter fa-lg"></i>
                                </span>
                            </span></a>
                        <a href=""><span class="icon-text">
                                <span class="icon">
                                    <i class="fa-brands fa-facebook fa-lg"></i>
                                </span>
                            </span></a>
                        <a href=""><span class="icon-text">
                                <span class="icon">
                                    <i class="fa-brands fa-instagram fa-lg"></i>
                                </span>
                            </span></a>
                    </p>
                </div>
                <!-- <div>
                    <article class="panel is-info">
                        <p class="panel-heading has-text-centered">Follow us</p>
                        <div class="column">
                            <a href=""><span class="icon-text">
                                <span class="icon">
                                <i class="fa-brands fa-twitter fa-lg"></i>
                                </span>
                            </span></a>
                            <a href=""><span class="icon-text">
                                <span class="icon">
                                <i class="fa-brands fa-facebook fa-lg"></i>
                                </span>
                            </span></a>
                            <a href=""><span class="icon-text">
                                <span class="icon">
                                <i class="fa-brands fa-instagram fa-lg"></i>
                                </span>
                            </span></a>
                        </div>
                    </article>
                </div> -->
            </div>

            <div class="column is-one-third">
                <article class="panel is-success has-background-white">
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
        </div>
    </section>
</div>

<?php include "footer.php"; ?>