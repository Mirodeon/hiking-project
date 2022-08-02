<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "User manager - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<?php
$db = new MyPDO();

$getUsers = $db->query('SELECT * FROM users ORDER BY id');

?>

<style>
    .flex {
        display: flex;
    }

    .center {
        justify-content: center;
    }
</style>
<div class="hero-body" style="background-image: url('./img/man-rand.jpg'); background-size: cover;">
    <section class="container flex center">
        <div>
            <article class="panel is-link">
                <p class="panel-heading has-text-centered">User management</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>NICKNAME</th>
                            <th>EMAIL</th>
                            <th>PERMISSION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($users = $getUsers->fetch()) {

                        ?>
                            <tr>
                                <th><?= $users['id']; ?></th>
                                <td><?= $users['firstname']; ?></td>
                                <td><?= $users['lastname']; ?></td>
                                <td><?= $users['nickname']; ?></td>
                                <td><?= $users['email']; ?></td>
                                <td><?= $users['permission']; ?></td>
                                <td><button class="button is-succes is-light is-small">Update</button></td>
                                <td><a href="deleteUser?id=<?= $users['id']; ?>"><button class="button is-danger is-light is-small">Delete</button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </article>
        </div>
    </section>
</div>
<?php include "footer.php"; ?>