<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Profile - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<?php
$db = new MyPDO();

$getHike = $db->query('SELECT * FROM hikes ORDER BY id');

?>

<style>
    .flex {
        display: flex;
    }
    .center {
        justify-content: center;
    }
</style>
<div class="hero-body">
    <section class="container flex center">
        <div>
            <article class="panel is-primary">
                <p class="panel-heading has-text-centered">Hikes management</p></br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DIFFICULTY</th>
                            <th>DATE</th>
                            <th>DISTANCE</th>
                            <th>DURATION</th>
                            <th>ELEVATION</th>
                            <th>DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($hike = $getHike->fetch()) {

                            $description = $hike['description'];
                            if (strlen($description) > 20) {
                                $new_description = substr($description, 0, 20) . '...';
                            } else {
                                $new_description = $description;
                            }

                        ?>
                            <tr>
                                <th><?= $hike['id']; ?></th>
                                <td><?= $hike['name']; ?></td>
                                <td><?= $hike['difficulty']; ?></td>
                                <td><?= $hike['creation_date']; ?></td>
                                <td><?= $hike['distance']; ?></td>
                                <td><?= $hike['duration']; ?></td>
                                <td><?= $hike['elevation']; ?></td>
                                <td><?= $new_description; ?></td>
                                <td><button class="button is-light is-small">Update</button></td>
                                <td><button class="button is-danger is-light is-small">Delete</button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </article>
        </div>
    </section>
</div>
<?php include "footer.php"; ?>