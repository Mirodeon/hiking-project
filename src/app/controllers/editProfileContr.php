<?php
session_start();
if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $newPassword = $_POST["newPass"];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/editProfileDb.php';
    require_once '../app/models/checkEditProfile.php';
    $signup = new editProfileCheck($firstname, $lastname, $login, $email, $password, $newPassword);
    $signup->submitEditUser();
    require_once '../app/models/loginDb.php';
    require_once '../app/models/checkLogin.php';
    if (!empty($newPassword)) {
        $password = $newPassword;
    }
    $login = new LoginContr($login, $password);
    $login->loginUser();
    header("location: profile");
}
