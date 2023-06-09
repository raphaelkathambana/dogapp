<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successfully established!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <link rel="stylesheet" href="/style/style.css" />
    <link rel="shortcut icon" href="/images/icons8_paw_prints.ico" type="image/x-icon" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/">
                <img src="images\icons8_paw_prints_40px.png" alt="Website Logo. Two Paws" />
            </a>
            <a href="/" class="navbar-title">Pawsitive Puppers</a>
            <a href="blog.html" class="navbar-items">Posts</a>
            <a href="services.html" class="navbar-items">Dog Services</a>
            <a href="products.html" class="navbar-items">Dog Care</a>
            <a href="contact.html" class="navbar-items">Contact Us</a>
            <a href="login.html" class="navbar-items">Login</a>
            <a href="register.html" class="navbar-items">Register</a>
            <input type="checkbox" name="check-box" id="check-box" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
        </div>
    </nav>
</body>

</html>
