<?php $title = "Hikes results"; ?>
<?php require "app/views/parts/head.php"; ?>
<?php include 'app/views/header.php'; ?>
<?php include 'app/views/parts/styleCard.php'; ?>

<section class="section hike-list has-background-light">
    <div class="columns is-centered flex">

        <?php
        $db = new MyPDO();

        $myHikes = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url FROM users INNER JOIN hikes ON users.id = hikes.user_id ORDER BY hikes.id DESC');

        while ($hike = $myHikes->fetch()) {
            include 'app/views/parts/cardHike.php';
        }
        ?>
    </div>
</section>
<?php include "footer.php"; ?>