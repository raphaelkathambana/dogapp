<?php
require_once 'vendor/autoload.php';

if (isset($_POST['contact'])) {
    echo /*html*/ "<pre>";
    var_dump($_POST);
    echo /*html*/ "</pre>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "Contact Form Submission";
    $messagePlain = "Name: $name\nEmail: $email\nMessage: $message";
    $messageHtml = "<p>Name: $name</p><p>Email: $email</p><p>Message: $message</p>";

    $mail = new \SendMail();
    //    mail($to, $subject, $messagePlain) or die("Error!"); //send plain text email to receiver.
    $mail->sendAnEmail($subject, $messagePlain, $messageHtml, $name, $email);
    // header("Location: contact.php?success=true");
} else {
    echo "Nope" . /*html*/ "<br>";
}

