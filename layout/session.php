<?php
require_once 'vendor/autoload.php';
$mysqliConn = new MysqliConnection();
$con = $mysqliConn ->getConnection();

if (isset($_COOKIE["session"])) {
    // User is logged in
    $id = $_COOKIE["session"];
    $nameQuery = "SELECT name, is_admin FROM users WHERE id = '$id';";
    if ($result = mysqli_query($con, $nameQuery)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['name'];
            $isAdmin = $row['is_admin'];
        }
    }
} else {
    // User is not logged in
    header("Location: ../login.html");
    exit();
}
