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
    <div class="section-heading">
        <h3 class="text-center">Reset Your Password</h3>
    </div>
    <form action="emailReset.php" method="post" class="form-container heading">
        <label for="user-email">
            <h3>Enter your email: </h3>
        </label>
        <input type="text" name="user-email" id="user-email" class="form-control"><br><br>
        <input type="submit" value="Send Verification" name="verify" class="w-100 btn btn-lg btn-primary">
    </form>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>
