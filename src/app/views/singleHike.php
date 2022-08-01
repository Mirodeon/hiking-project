<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    $title = "Hike - " . $_SESSION["user"]["login"];
} else {
    $title = "Hike";
} ?>
<?php
$db = new MyPDO();
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $singleHike = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url, hikes.user_id FROM users INNER JOIN hikes ON users.id = hikes.user_id WHERE hikes.id =' . "$getid");
    $shike = $singleHike->fetch();
} else if (isset($_SESSION["hike"])) {
    $getid = $_SESSION["hike"]["id"];
    $singleHike = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url, hikes.user_id FROM users INNER JOIN hikes ON users.id = hikes.user_id WHERE hikes.id =' . "$getid");
    $shike = $singleHike->fetch();
} else {
    echo "Aucune id trouvée";
}
?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
</br>
<div class="card-content">
    <div class="columns is-centered">
        <div class="column is-three-fifths">
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <img src="<?= $shike['url']; ?>" alt="Placeholder image">
                    </figure>
                </div>
            </div>
        </div>
        <div class="column">
            <p class="has-text-centered has-text-weight-semibold hike-name is-size-5"><?= $shike['name']; ?></p>
            <p class="is-size-7 has-text-centered">Difficulty : <?= $shike['difficulty']; ?></p></br>
            <nav class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Distance</p>
                        <p><?= $shike['distance']; ?></p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Duration</p>
                        <p><?= $shike['duration']; ?></p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Elevation</p>
                        <p><?= $shike['elevation']; ?></p>
                    </div>
                </div>
            </nav>
            <div class="content">
                <p class="is-size-6"><?= $shike['description']; ?></p>
                <a href="#">#mountain</a> <a href="#">#lake</a>
                <div class="media">
                    <div class="media-content">
                        <p class="title is-6"><?= $shike['firstname']; ?> <?= $shike['lastname']; ?></p>
                        <p class="subtitle is-7">@<?= $shike['nickname']; ?></p>
                        <p class="is-size-7"><?= $shike['creation_date']; ?></p>
                    </div>
                </div>
            </div>
            <?php include '../app/controllers/singleHikeBtn.php'; ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>