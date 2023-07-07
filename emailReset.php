<?php
require_once 'vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//Load Composer's autoloader

if (isset($_POST['verify'])) {
    if (!filter_var($_POST['user-email'], FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email");
    }
} else {
    echo /*html*/"<br>" . "Nope";
}

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; //gmail SMTP server
    $mail->SMTPAuth = true;

    $mail->Port = 465; //SMTP port
    $mail->SMTPSecure = "ssl";
    //Enable SMTP authentication
    $mail->Username = $_ENV['SMTP_USERNAME']; // SMTP username
    $mail->Password = $_ENV['SMTP_PASSWORD']; //SMTP password
    $mail->SMTPSecure = "ssl";

    //Recipients
    $mail->setFrom('maya12raph@gmail.com', 'Pawsitive Puppers');
    $mail->addAddress($_POST['user-email']); //Name is optional
    $mail->Subject = 'Reset Password';
    $mail->Body = 'Enter the following key to reset your password\n UUIIDDK';
    $mail->AltBody = 'Alt Reset Password Using Email';
    //Content
    $mail->isHTML(false); //Set email format to HTML

    $mail->send();
    echo 'Message has been sent';
    header('Location: validateKey.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}