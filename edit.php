<?php
require_once 'vendor/autoload.php';

$mysqliConn = new MysqliConnection();
$con = $mysqliConn ->getConnection();

if (isset($_POST["edit"])) {
    $userId = $_POST['user-id'];
} else {
    if (isset($_GET["id"])) {
        $userId = $_GET['id'];
    } else {
        echo /*html*/"<br>" . "Nope, NOT REALLY";
    }
}
$query = "SELECT * FROM users WHERE id = '$userId';";
$result = mysqli_query($con, $query);
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
        <form action="update.php" method="post" class="form-signin" name="login">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo $name; ?>">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo $email; ?>">
            <input type="hidden" name="id" id="id" value="<?php echo $userId; ?>">
    
            <input class="btn btn-primary mt-3 m-10" type="submit" name="update" value="Update Profile" />
        </form>
        <a href="changePassword.php" class="btn btn-primary">Change Password</a>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>
