<?php
require_once "auth.php";
if (isset($_COOKIE["session"])) {
    // User is logged in
    $id = $_COOKIE["session"];
    $nameQuery = "SELECT name FROM users WHERE id = '$id';";
    if ($result = mysqli_query($con, $nameQuery)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['name'];
            $isAdmin = $row['admin'];
        }
    }
} else {
    // User is not logged in
    header("Location: ../login.html");
    exit();
}