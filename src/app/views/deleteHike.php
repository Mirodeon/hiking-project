<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Delete hike - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<?php
$db = new MyPDO();
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];

    $recupHike = $db->prepare('SELECT * FROM hikes WHERE id =' . "$getid");
    $recupHike->execute();
    if($recupHike->rowCount() > 0) {
        $delHike = $db->prepare('DELETE FROM hikes WHERE id =' . "$getid");
        $delHike->execute();
        header("location: hikeManage");
    }else{
        header("location: 404");
    }
}else{
    header("location: 404");
}
?>
<?php include "footer.php"; ?>