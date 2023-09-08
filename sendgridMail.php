<?php
//Load Composer's autoloader
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function sendAnEmail($subject, $messagePlain, $messageHtml, $receiverName, $receiverEmail) {
    $email = new \SendGrid\Mail\Mail();
    $mailEmail = $_ENV['EMAIL_USERNAME']; // SMTP username
    
    $email->setFrom($mailEmail, "Pawsitive Puppers");
    $email->setSubject($subject);
    $email->addTo($receiverEmail, $receiverName);
    $email->addContent("text/plain", $messagePlain);
    $email->addContent("text/html", $messageHtml);
    $sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
}