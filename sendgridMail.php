<?php
//Load Composer's autoloader
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$email = new \SendGrid\Mail\Mail();

$mailEmail = $_ENV['EMAIL_USERNAME']; // SMTP username
$username = $_ENV['SMTP_USERNAME']; // SMTP username

$email->setFrom($mailEmail, "Pawsitive Puppers");
$email->setSubject("Sending with Twilio SendGrid is Fun");
$email->addTo($username, "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}