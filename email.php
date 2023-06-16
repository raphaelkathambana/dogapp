<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;

    $mail->Port = 465;                    //SMTP port
    $mail->SMTPSecure = "ssl";
     //Enable SMTP authentication
    $mail->Username = 'maya12raph@gmail.com'; // SMTP username
    $mail->Password = 'rgrgelxypyhlikzu'; //SMTP password
    $mail->SMTPSecure = "ssl";

    //Recipients
    $mail->setFrom('maya12raph@gmail.com', 'Pawsitive Puppers');
    //Optional name

    //Content
    $mail->isHTML(false); //Set email format to HTML

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
