<?php
require_once "auth.php";
if (isset($_COOKIE["session"])) {
    // User is logged in
    $username = $_COOKIE["session"];
} else {
    // User is not logged in
    header("Location: login.html");
    exit();
}
if (isset($_POST['update'])) {
    var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $query = "UPDATE users set `email` = '$email', `name` = '$name' WHERE '$id' = id;";
} else {
    echo /*html*/"<br>" . "Nope";
}
if (isset($_POST['update-password'])) {
    var_dump($_POST);
    $password = $_POST['psw'];
    $idQuery = "SELECT id FROM users WHERE name = '$username';";
    $result = mysqli_query($con, $idQuery);
    if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result) < 2) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
        }
    }
    $query = "UPDATE users set `password` = '$password' WHERE '$id' = id;";
} else {
    echo /*html*/"<br>" . "Nope";
}

if ($con->query($query)) {
    echo "Yes";
    header("Location: profile.php");
} else {
    die("Error: Something went wrong");
}
