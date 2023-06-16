<?php
require_once "auth.php";
include_once "layout/header.php";
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Your Profile/head></title>
</head>

<body>
    <form action="update.php" class="form-container">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="<?php echo $name; ?>">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="<?php echo $email; ?>">

        <input class="btn btn-primary mt-3 mb-5" type="submit" name="update" value="Update Profile" />
    </form>
    <a href="changePassword.php">Change Password</a>
</body>

</html>
