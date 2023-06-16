<?php
require_once "auth.php";
$email = "";
$password = "";
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $remember_me = isset($_POST["remember-me"]) ? true : false;
    var_dump($_POST);
} else {
    echo /*html*/"<br>" . "Nope";
}

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $session_duration = $remember_me ? 86400 * 30 : 180;
    setcookie("session", $row["name"], time() + $session_duration);
    header("Location: indexing.php");
} else {
    echo /*html*/"<br>" . "Nope";
}