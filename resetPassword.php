<?php 

include_once "layout/header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Your Password</title>
</head>
<body>
<?php  include_once "layout/navbar.php"; ?>
<div class="form-container">
    <div class="section-heading">
        <h3 class="text-center">Reset Password</h3>
    </div>
    <form action="update.php" autocomplete="off" method="post">
        <label for="new-password">Enter New Password</label>
        <input class="form-control" type="password" name="new-password" id="new-password" />
        <label for="new-password-confirm">Confirm New Password</label>
        <input class="form-control" type="password" name="new-password-confirm" id="new-password-confirm" />

        <input class="btn btn-primary mt-3 mb-5" type="submit" name="update-password" value="Update Password" />
    </form>
</div>

<?php  include_once "layout/footer.php"; ?>

</body>
</html>