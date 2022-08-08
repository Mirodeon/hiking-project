<?php
session_start();
if (isset($_POST["submitTag"])) {
    $hikeId = $_POST["submitTag"];
    $tag = $_POST["newTag"];
    $_SESSION["hike"] = [
        "id" => $hikeId
    ];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/createTagDb.php';
    $addHike = new createTag($hikeId, $tag);
    $addHike->submitTag();
    header("location: singleHike");
}