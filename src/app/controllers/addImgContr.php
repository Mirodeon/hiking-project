<?php
session_start();
if (isset($_POST["submit"])) {
    $urlImg = $_POST["img-url"];
    $idHike = $_SESSION["hike"]["id"];
    $userId = $_SESSION["user"]["id"];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/addImgDb.php';
    require_once '../app/models/addImgCheck.php';
    $addHike = new addImgCheck($urlImg, $idHike, $userId);
    $addHike->submitImg();
    header("location: singleHike");
}
