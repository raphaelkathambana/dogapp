<?php
require_once "auth.php";
$email = "";
$password = "";
$name = "";
if (isset($_POST["register"])) {
    $email = strtolower($_POST["email"]);
    $password = $_POST["psw"];
    $name = ucwords(strtolower(["first-name"] . " " . $_POST["last-name"]));

    var_dump($_POST);
} else {
    echo /*html*/"<br>" . "Nope";
}

$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password');";

if ($conn->query($query)) {
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $session_duration = 180;
        setcookie("session", $row["name"], time() + $session_duration);
        header("Location: indexing.php");
    }
} else {
    die("Error" . $conn->error);
}