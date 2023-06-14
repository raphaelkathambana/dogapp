<?php
require_once "auth.php";
include_once "layout/header.php";
if (isset($_COOKIE["session"])) {
    // User is logged in
    $username = $_COOKIE["session"];
    echo $username . ", Welcome";
} else {
    // User is not logged in
    header("Location: login.html");
    exit();
}
$query = "SELECT * FROM users WHERE name = '$username';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
} else {
    echo /*html*/"<br>" . "Nope";
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>My Profile</title>
    </head>
    
    <body>
        <?php include_once "layout/navbar.php"; ?>
    <div class="container">
        <div class="profile">
        <div class="section-heading">
            <h3 class="text-center">Profile</h3>
        </div>
            <h3 class="mt-4"><?php echo $email; ?></h3>
        </div>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>
