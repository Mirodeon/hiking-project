<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: login");
    $_SESSION['error'] = "You need to be logged in to access this part.";
} ?>
<?php $title = "My Hikes - " . $_SESSION["user"]["login"]; ?>

<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<style>
    .flex {
        flex-wrap: wrap;
    }
    a {
        text-decoration: none;
        color: black;
    }
    .flexx {
        display: flex;
        justify-content: space-around;
    }
</style>

<section class="section hike-list has-background-light">
    <div class="columns is-centered flex">

        <?php
        $db = new MyPDO();
        $userID = $_SESSION["user"]["id"];

        $myHikes = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url FROM users INNER JOIN hikes ON users.id = hikes.user_id WHERE users.id =' . "$userID");

        while ($hike = $myHikes->fetch()) {

            $description = $hike['description'];
            if (strlen($description) > 100) {
                $new_description = substr($description, 0, 100) . '...';
            } else {
                $new_description = $description;
            }

        ?>
            <a href="singleHike?id=<?= $hike['id']; ?>">
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="<?= $hike['url']; ?>" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">

                            <p class="has-text-centered has-text-weight-semibold hike-name is-size-5"><?= $hike['name']; ?></p>
                            <p class="is-size-7 has-text-centered">Difficulty : <?= $hike['difficulty']; ?></p><br>
                            <nav class="level flexx">
                                <div class="level-item has-text-centered">
                                    <div>
                                        <p class="heading">Distance</p>
                                        <p><?= $hike['distance']; ?></p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                        <p class="heading">&nbspDuration&nbsp</p>
                                        <p><?= $hike['duration']; ?></p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                        <p class="heading">Elevation</p>
                                        <p><?= $hike['elevation']; ?></p>
                                    </div>
                                </div>
                            </nav>
                            <div class="content">
                                <p class="is-size-6"><?= $new_description ?></p>
                                <p class="is-size-7">Tags:
                                    <a>
                                        <?php include 'models/getTags.php'; ?>
                                    </a>
                                </p>
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-6"><?= $hike['firstname']; ?> <?= $hike['lastname']; ?></p>
                                        <p class="subtitle is-7">@<?= $hike['nickname']; ?></p>
                                        <p class="is-size-7"><?= $hike['creation_date']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>

    </div>
</section>

<?php include "footer.php"; ?>