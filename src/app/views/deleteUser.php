<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: home");
} ?>
<?php $title = "Delete user - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<?php
$db = new MyPDO();
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];

    $recupUser = $db->prepare('SELECT * FROM users WHERE id =' . "$getid");
    $recupUser->execute();
    if($recupUser->rowCount() > 0) {
        $delUser = $db->prepare('DELETE FROM users WHERE id =' . "$getid");
        $delUser->execute();
        header("location: userManage");
    }else{
        header("location: 404");
    }
}else{
    header("location: 404");
} 
?>
<?php include "footer.php"; ?>