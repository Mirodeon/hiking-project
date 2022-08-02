<?php
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