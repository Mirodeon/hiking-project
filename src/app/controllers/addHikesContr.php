<?php
session_start();
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    require_once '../app/controllers/currentDate.php';
    $date = currentDate::getDate();
    $distance = $_POST["distance"];
    $durationH = $_POST["durationH"];
    $durationM = $_POST["durationM"];
    $elevation = $_POST["elevation"];
    $description = $_POST["description"];
    $userId = $_SESSION["user"]["id"];
    $difficulty = $_POST["difficulty"];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/addHikeDb.php';
    require_once '../app/models/addHikeCheck.php';
    $addHike = new addHikeCheck($name, $difficulty, $date, $distance, $durationH, $durationM, $elevation, $description, $userId);
    $addHike->submitHike();
    header("location: imgForm");
}
