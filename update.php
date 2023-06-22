<?php
require_once "auth.php";
include_once "/layout/session.php";
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
    $id = $_COOKIE["session"];
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
