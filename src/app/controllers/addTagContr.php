<?php
session_start();
if (isset($_POST["hike"])) {
    $hikeId = $_POST["hike"];
    $tagId = $_POST["tag"];
    $_SESSION["hike"] = [
        "id" => $hikeId
    ];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/addTagDb.php';
    $addHike = new addTag($hikeId, $tagId);
    $addHike->submitTag();
    header("location: singleHike");
}