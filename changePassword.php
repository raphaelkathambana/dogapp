<?php
if (isset($_COOKIE["session"])) {
    // User is logged in
    $username = $_COOKIE["session"];
} else {
    // User is not logged in
    header("Location: login.html");
    exit();
}
include_once "layout/header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
</head>
<body>
    <?php include_once "layout/navbar.php"; ?>
    <form action="emailReset.php" method="post">
        <h3>Enter your email: </h3>
        <input type = "text" name ="user-email"><br><br>
        <input type="submit" value="Send Verification" name="verify">
    </form>
    <?php include_once "layout/footer.php"; ?>
</body>
</html>
