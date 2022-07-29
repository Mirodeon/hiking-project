<?php $title = "All Hikes"; ?>

<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<section class="section hike-list">
    <div class="columns is-centered">

        <?php
        $db = new MyPDO();

        $myHikes = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url FROM users INNER JOIN hikes ON users.id = hikes.user_id ORDER BY hikes.id DESC');

        while ($hike = $myHikes->fetch()) {
        ?>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="<?= $hike['url']; ?>" alt="Placeholder image">
                        </figure>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</section>

<?php include "footer.php"; ?>