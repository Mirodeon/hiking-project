<?php $title = "Hikes results"; ?>

<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<style>
    .flex {
        flex-wrap: wrap;
    }

    .container {
        padding: 1em 0;
        float: left;
        width: 50%;
    }

    @media screen and (max-width: 640px) {
        .container {
            display: block;
            width: 100%;
        }
    }

    @media screen and (min-width: 900px) {
        .container {
            width: 33.33333%;
        }
    }

    .container .title {
        color: #1a1a1a;
        text-align: center;
        margin-bottom: 10px;
    }

    .content {
        position: relative;
        width: 90%;
        max-width: 400px;
        margin: auto;
        overflow: hidden;
    }

    .content .content-overlay {
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        height: 99%;
        width: 100%;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -moz-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .content:hover .content-overlay {
        opacity: 1;
    }

    .content-image {
        width: 100%;
    }

    .content-details {
        position: absolute;
        text-align: center;
        padding-left: 1em;
        padding-right: 1em;
        width: 100%;
        top: 50%;
        left: 50%;
        opacity: 0;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .content:hover .content-details {
        top: 50%;
        left: 50%;
        opacity: 1;
    }

    .content-details h3 {
        color: #fff;
        font-weight: 500;
        letter-spacing: 0.15em;
        margin-bottom: 0.5em;
        text-transform: uppercase;
    }

    .content-details p {
        color: #fff;
        font-size: 0.8em;
    }

    .fadeIn-bottom {
        top: 80%;
    }

    .fadeIn-top {
        top: 20%;
    }

    .fadeIn-left {
        left: 20%;
    }

    .fadeIn-right {
        left: 80%;
    }

    .absolute {
        position: absolute;
    }

    .relative {
        position: relative;
    }
</style>

<section class="section hike-list">
    <div class="columns is-centered flex">

        <?php
        $db = new MyPDO();

        $myHikes = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url FROM users INNER JOIN hikes ON users.id = hikes.user_id ORDER BY hikes.id DESC');

        while ($hike = $myHikes->fetch()) {
        ?>
<?php include 'app/views/parts/cardHike.php'; ?>
            <!--<div class="container">
                <div class="content">
                    <a href="singleHike?id=<?= $hike['id']; ?>">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="<?= $hike['url']; ?>">
                        
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title is-size-4"><?= $hike['name']; ?></h3>
                            <p class="is-size-7 has-text-centered">Difficulty : <?= $hike['difficulty']; ?></p>
                            <nav class="level">
                                <div class="level-item has-text-centered">
                                    <div>
                                        <p class="heading">Distance</p>
                                        <p><?= $hike['distance'] . 'km'; ?></p>
                                    </div>
                                    <div>
                                        <p class="heading">&nbsp&nbsp  Duration  &nbsp&nbsp</p>
                                        <p><?= $hike['duration']; ?></p>
                                    </div>
                                    <div>
                                        <p class="heading"> Elevation</p>
                                        <p><?= $hike['elevation'] . 'm'; ?></p>
                                    </div>
                                </div>                         
                            </nav>
                        </div>
                        
                    </a>
                </div>
            </div> -->
        <?php
        }
        ?>

    </div>
</section>
<?php include "footer.php"; ?>