<?php
require_once "auth.php";
include_once "/layout/session.php";
$genQuery = function ($id, $name, $email, $connection) {
    $userQuery = "SELECT * FROM users WHERE id = '$id';";
    $userResult = mysqli_query($connection, $userQuery);
    if (mysqli_num_rows($userResult) > 0) {
        $row = mysqli_fetch_assoc($userResult);
        $queryName = $row['name'];
        $queryEmail = $row['email'];
        if (strcmp($name, $queryName)) {
            $theQuery = "UPDATE users set `name` = '$name' WHERE '$id' = id;";
        }
        if (strcmp($email, $queryEmail)) {
            $theQuery = "UPDATE users set `email` = '$email' WHERE '$id' = id;";
        }
        if (strcmp($name, $queryName) && strcmp($email, $queryEmail)) {
            $theQuery = "UPDATE users set `name` = '$name', `email` = '$email' WHERE '$id' = id;";
        }
    }
    return $theQuery;
};
if (isset($_POST['update'])) {
    var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $query = $genQuery($id, $name, $email, $con);

} else {
    echo /*html*/"<br>" . "Nope, can't update";
}
if (isset($_POST['update-password'])) {
    var_dump($_POST);
    $password = $_POST['psw'];
    $id = $_COOKIE["session"];
    $query = "UPDATE users set `password` = '$password' WHERE '$id' = id;";
} else {
    echo /*html*/"<br>" . "Nope, no password change";
}
$adminId = $_COOKIE['session'];
$adminQuery = "SELECT * FROM users WHERE id = '$adminId';";
$result = mysqli_query($con, $adminQuery);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $isAdmin = $row['admin'];
} else {
    echo /*html*/"<br>" . "Nope, no admin stuff";
}
if ($con->query($query)) {
    echo "Yes";
    if ($isAdmin == 1) {
        header("Location: admin.php");
    } else {
        header("Location: profile.php");
    }
} else {
    die("Error: Something went wrong");
}