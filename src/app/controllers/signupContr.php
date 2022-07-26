<?php
session_start();
if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $permission = "utilisateur";
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/signup.php';
    require_once '../app/models/checkSignup.php';
    $signup = new SignupCheck($firstname, $lastname, $login, $email, $password, $permission);
    $signup->signupUser();
    $_SESSION["user"] = [
        "firstname" => $_POST["firstname"],
        "lastname" => $_POST["lastname"],
        "login" => $_POST["login"],
        "email" => $_POST["email"]
    ];
    header("location: welcome");
}
