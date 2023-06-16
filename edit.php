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
if (isset($_POST["edit"])) {
    $id = $_POST['user-id'];
} else {
    echo /*html*/"<br>" . "Nope";
}

$query = "SELECT * FROM users WHERE id = '$id';";
$result = mysqli_query($conn, $query);
$name = "";
$email = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
}
include_once "layout/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Your Profile</title>
</head>

<body>
    <?php include_once "layout/navbar.php"; ?>
    <div class="form-container">
        <form action="update.php" method="post" class="form-signin">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo $name; ?>">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo $email; ?>">
    
            <input class="btn btn-primary mt-3 m-10" type="submit" name="update" value="Update Profile" />
        </form>
        <a href="changePassword.php" class="btn btn-primary">Change Password</a>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>
