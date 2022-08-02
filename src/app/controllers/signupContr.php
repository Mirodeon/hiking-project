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
    require_once '../app/models/loginDb.php';
    require_once '../app/models/checkLogin.php';
    $login = new LoginContr($login, $password);
    $login->loginUser();

    $to      = 'luuduc34@hotmail.com';
    $subject = 'Thanks for your subscription';
    $message = '
    <html>
        <head>
            <title>Subscription confirmation</title>
        </head>
        <body>
            <img src="./img/mail_image.jpg" alt="welcome mail image">
            <h1>hello there!</h1></br>
            <h3>Thanks for signing up as a new member.</h3>
            <h2>We hope you\'ll enjoy your visit!</h2>
        </body>
   </html>';
    $headers = 'From: webmaster@elderberry.be' . "\r\n" .
        'Reply-To: webmaster@elderberry.be' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);

    header("location: welcome");
}
