<?php
session_start();
if (isset($_POST["submit"])) {
    $login = $_POST["login"];
    $password = $_POST["pass"];
    require_once '../app/models/MyPDO.php';
    require_once '../app/models/connect.php';
    require_once '../app/models/loginDb.php';
    require_once '../app/models/checkLogin.php';
    $login = new LoginContr($login, $password);
    $login->loginUser();
}
