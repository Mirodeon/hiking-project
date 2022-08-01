<?php
session_start();
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    require_once '../app/controllers/currentDate.php';
    $update = currentDate::getDate();
    $distance = $_POST["distance"];
    $durationH = $_POST["durationH"];
    $durationM = $_POST["durationM"];
    $elevation = $_POST["elevation"];
    $description = $_POST["description"];
    $userId = $_SESSION["user"]["id"];
    $difficulty = $_POST["difficulty"];
    $hikeId = $_POST["submit"];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/editHikeDb.php';
    require_once '../app/models/editHikeCheck.php';
    $addHike = new editHikeCheck($name, $difficulty, $update, $distance, $durationH, $durationM, $elevation, $description, $userId, $hikeId);
    $addHike->submitEditHike();
    header("location: imgForm");
}