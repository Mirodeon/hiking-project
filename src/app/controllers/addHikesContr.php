<?php
session_start();
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $distance = $_POST["distance"];
    $duration = $_POST["durationH"]."h".$_POST["durationM"];
    $elevation = $_POST["elevation"];
    $password = $_POST["description"];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    /*require_once '../app/models/signup.php';
    require_once '../app/models/checkSignup.php';*/
    /*$signup = new SignupCheck($firstname, $lastname, $login, $email, $password, $permission);
    $signup->signupUser();
    require_once '../app/models/loginDb.php';
    require_once '../app/models/checkLogin.php';
    $login = new LoginContr($login, $password);
    $login->loginUser();*/
    /*header("location: welcome");*/
}