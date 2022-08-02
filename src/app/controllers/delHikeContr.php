<?php if (
    ($_SESSION["user"]["id"] != $_SESSION["editHike"]["userId"] &&
        $_SESSION["user"]["permission"] != "administrateur")
    || (!isset($_POST["delete"]) && !isset($_SESSION["editHike"]["hikeId"]))
) {
    unset($_SESSION["editHike"]);
    $_SESSION['error'] = "Proper user required";
    header("location: 404");
} else if (isset($_POST["delete"])) {
    unset($_SESSION["editHike"]);
    $hikeId = $_POST["delete"];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/delHikeDb.php';
    $delHike = new delHike($hikeId);
    $delHike->submitDelHike();  
}
