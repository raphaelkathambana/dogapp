<?php
require_once 'vendor/autoload.php';

$mysqliConn = new MysqliConnection();
$con = $mysqliConn ->getConnection();
$email = "";
$password = "";
$name = "";
if (isset($_POST["register"])) {
    $email = strtolower($_POST["email"]);
    $password = $_POST["psw"];
    $confPassword = $_POST["psw-repeat"];
    $name = ucwords(strtolower($_POST["first-name"] . " " . $_POST["last-name"]));
    var_dump($_POST);
} else {
    echo /*html*/"<br>" . "Nope";
}
if (!strcmp($password, $confPassword) === 0) {
    die("Error: passwords do not match");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email");
}


$query = "INSERT INTO users (name, email, password, admin) VALUES ('$name', '$email', '$password', 0);";

if ($con->query($query)) {
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $session_duration = 180;
        setcookie("session", $row["id"], time() + $session_duration);
        header("Location: indexing.php");
    }
} else {
    die("Error" . $con->error);
}
