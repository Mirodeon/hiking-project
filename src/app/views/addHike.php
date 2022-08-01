<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: login");
    $_SESSION['error'] = "You need to be logged in to access this part.";
    exit();
} ?>
<?php if (
    ($_SESSION["user"]["id"] != $_SESSION["editHike"]["userId"] &&
        $_SESSION["user"]["permission"] != "administrateur")
    || !isset($_POST["edit"])
) {
    unset($_SESSION["editHike"]);
    $title = "Add a Hike - " . $_SESSION["user"]["login"];
} else {
    $title = "Edit a Hike - " . $_SESSION["user"]["login"];
} ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box" <?php if (isset($_SESSION['editHike'])) {
                                                    echo 'action="editHikeContr"';
                                                } else {
                                                    echo 'action="addHikeContr"';
                                                } ?>>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="name" class="label is-small">Name</label>
                            </div>
                            <div class="control has-icons-left">
                                <input type="text" class="input is-small" placeholder="Hike name" name="name" <?php if (isset($_SESSION['editHike'])) {
                                                                                                                    echo 'value="' . $_SESSION['editHike']["name"] . '"';
                                                                                                                } ?>>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-blind"></i>
                                </span>
                            </div>
                            <div class="field">
                                <label for="distance" class="label is-small">Distance: km</label>
                            </div>
                            <div class="control has-icons-left">
                                <input type="number" class="input is-small" placeholder="Hiking distance" name="distance" min="0" step="0.1" <?php if (isset($_SESSION['editHike'])) {
                                                                                                                                                    echo 'value="' . $_SESSION['editHike']["distance"] . '"';
                                                                                                                                                } ?>>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-globe"></i>
                                </span>
                            </div></br>
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label for="durationH" class="label is-small">Duration</label>
                                    </div>
                                    <div class="control has-icons-left">
                                        <input type="number" class="input is-small" placeholder="Hour" name="durationH" min="0" step="1" <?php if (isset($_SESSION['editHike'])) {
                                                                                                                                                echo 'value="' . $_SESSION['editHike']["durationH"] . '"';
                                                                                                                                            } ?>>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="column is-1">
                                    <div class="field">
                                        <label for="durationH" class="label is-small" style="visibility:hidden">.</label>
                                    </div>
                                    <div class="control has-icons-left">
                                        <p>h</p>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label for="durationM" class="label is-small" style="visibility:hidden">.</label>
                                    </div>
                                    <div class="control has-icons-left">
                                        <input type="number" class="input is-small" placeholder="Minutes" name="durationM" min="0" max="59" step="1" <?php if (isset($_SESSION['editHike'])) {
                                                                                                                                                            echo 'value="' . $_SESSION['editHike']["durationM"] . '"';
                                                                                                                                                        } ?>>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="field">
                                <label for="elevation" class="label is-small">Difficulty</label>
                            </div>
                            <div class="select is-small">
                                <select name="difficulty">
                                    <option value="Easy">Easy</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Hard">Hard</option>
                                    <option value="Extreme">Extreme</option>
                                </select>
                            </div>
                        </div>

                        <div class="column">

                            <div class="field">
                                <label for="elevation" class="label is-small">Elevation: m</label>
                            </div>
                            <div class="control has-icons-left">
                                <input type="number" class="input is-small" placeholder="Elevation gain of the hike" name="elevation" min="0" step="1" <?php if (isset($_SESSION['editHike'])) {
                                                                                                                                                            echo 'value="' . $_SESSION['editHike']["elevation"] . '"';
                                                                                                                                                        } ?>>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-line-chart"></i>
                                </span>
                            </div></br>
                            <div class="field">
                                <label for="description" class="label is-small">Description</label>
                            </div>
                            <div class="control has-icons-left">
                                <textarea class="textarea is-small" placeholder="Description of the hike" name="description"><?php if (isset($_SESSION['editHike'])) {
                                                                                                                                    echo $_SESSION['editHike']["description"];
                                                                                                                                } ?></textarea>
                                <!-- <span class="icon is-small is-left">
                            <i class="fa fa-commenting"></i>
                        </span> -->
                            </div></br>
                            <div class="field">
                                <button class="button is-success is-small" type="submit" name="submit" <?php if (isset($_SESSION['editHike'])) {
                                                                                                            echo 'value="' . $_POST["edit"] . '"';
                                                                                                        } else {
                                                                                                            echo 'value="addHike"';
                                                                                                        } ?>><?php if (isset($_SESSION['editHike'])) {
                                                                                                                                                echo "Edit a Hike";
                                                                                                                                            } else {
                                                                                                                                                echo "Add a Hike";
                                                                                                                                            } ?></button>
                            </div>

                        </div>
                    </div>
                    <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </form>

            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION["error"]); ?>
<?php unset($_SESSION["editHike"]); ?>
<?php include "footer.php"; ?>