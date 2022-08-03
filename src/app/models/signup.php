
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Signup extends Dbconnect
{
    protected function setUser($firstname, $lastname, $login, $email, $password, $permission)
    {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $q = $this->connect()->prepare("INSERT INTO `users`(`firstname`, `lastname`, `nickname`, `email`, `password`, `permission`) 
        VALUES (:firstname, :lastname, :nickname, :email, :pass, :permission)");
        $q->bindParam(":firstname", $firstname);
        $q->bindParam(":lastname", $lastname);
        $q->bindParam(":nickname", $login);
        $q->bindParam(":email", $email);
        $q->bindParam(':pass', $hashed_password);
        $q->bindParam(":permission", $permission);
        if (!$q->execute()) {
            $q = null;
            header("location: register");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }

        $file = 'core/my_settings.ini';
        $settings = parse_ini_file($file, TRUE);
        $password = $settings['mailer']['password'];
        $username = $settings['mailer']['username'];
        $host = $settings['mailer']['host'];

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
            $mail->setFrom('elderberryhiking@gmail.com', 'Elderberry Hiking');      // From
            $mail->addAddress($email, $lastname.", ".$firstname);                   // Destination
            $mail->addBCC('elderberryhiking@gmail.com');                            // Blind carbon copy
            //Content
            $mail->isHTML(true);            // Set email format to HTML
            $mail->Subject = 'Thanks for your subscription';
            $mail->Body    = '<html>
        <head>
         <title>Subscription confirmation</title>
        </head>
        <body>
        <img src="https://luuduc34.github.io/weather-app/img/mail_image.jpg" alt="Elderberry mail image">
         <h2>hello there!</h2>
         <h4>Thanks for signing up as a new member.</h4>
         <h3>We hope you\'ll enjoy your visit!</h3>
        </body>
        </html>';

            $mail->send();
            echo 'A confirmation mail has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    protected function checkUser($login, $email)
    {
        $q = $this->connect()->prepare("SELECT * FROM users WHERE nickname = ? OR email = ?;");
        if (!$q->execute(array($login, $email))) {
            $q = null;
            header("location: register");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
        $resultcheck = null;
        if ($q->rowCount() > 0) {
            $resultcheck = false;
        } else {
            $resultcheck = true;
        }
        return $resultcheck;
    }
}
