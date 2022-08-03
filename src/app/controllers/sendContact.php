<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$file = 'core/my_settings.ini';
$settings = parse_ini_file($file, TRUE);
$password = $settings['mailer']['password'];
$username = $settings['mailer']['username'];
$host = $settings['mailer']['host'];

if (isset($_POST['message'])) {

    $message = '<h1>Message from Elderberry hiking contact form</h1>
<p><b>Email : </b>' . $_POST['email'] . '<br>
<p><b>Firstname : </b>' . $_POST['firstname'] . '<br>
<p><b>Lastname : </b>' . $_POST['lastname'] . '<br>
<p><b>Subject : </b>' . $_POST['subject'] . '<br>
<p><b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>
<img src="https://luuduc34.github.io/weather-app/img/mail_image.jpg" alt="Elderberry mail image">';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings    
        $mail->isSMTP();
        $mail->Mailer = "smtp";         // Set mailer to use SMTP 
        //$mail->SMTPDebug = 1;         // Enable verbose debug output
        $mail->SMTPAuth = TRUE;         // Enable SMTP authentication
        $mail->SMTPSecure = "tls";      // Enable TLS encryption, 'ssl' (a predecessor to TSL) is also accepted
        $mail->Port = 587;              // TCP port to connect to (587 is a standard port for SMTP)
        $mail->Host = $host;            // Specify main and backup SMTP servers
        $mail->Username = $username;    // SMTP username
        $mail->Password = $password;    // SMTP password 
        //Recipients
        $mail->setFrom($_POST['email'], 'Elderberry Hiking contact form');      // From
        $mail->addAddress('elderberryhiking@gmail.com');                   // Destination
        $mail->addBCC($_POST['email'], 'This is a copy of your message');                            // Blind carbon copy
        //Content
        $mail->isHTML(true);            // Set email format to HTML
        $mail->Subject = 'New message from Elderberry hiking';
        $mail->Body    = $message;

        $mail->send();
        header("location: contact");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
