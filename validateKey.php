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
echo "email was sent successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validate Key</title>
</head>
<body>
    <?php include_once "layout/navbar.php"; ?>
    <form action="verifyKey.php" class="form-container" method="post">
        <label for="key">Enter Key</label>
        <input class="form-control" type="text" name="key" id="key" autofocus="on" autocomplete="off" />
        <input class="btn btn-primary mt-3 mb-5" type="submit" name="verify-key" value="Validate" />
    </form>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>