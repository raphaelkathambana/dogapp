<?php
require_once "auth.php";
include_once "layout/header.php";
$id = $_COOKIE['session'];
$query = "SELECT * FROM users WHERE id = '$id';";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $id = $row['id'];
    $isAdmin = $row['is_admin'];
} else {
    echo /*html*/"<br>" . "Nope";
}
$dogInfoQuery = "SELECT * FROM dog_info WHERE id = '$id';";
$dogResult = mysqli_query($con, $dogInfoQuery);
if (mysqli_num_rows($dogResult) > 0) {
    $dogRow = mysqli_fetch_array($dogResult);
    $name = $dogRow['dogName'];
    $breed = $dogRow['dogBreed'];
    $age = $dogRow['age'];
    $gender = $dogRow['gender'];
} else {
    $name = '';
    $breed = '';
    $age = '';
    $gender = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Profile</title>
</head>

<body>
    <?php include_once "layout/navbar.php"; ?>
    <div class="profile-container">
        <div class="posts">
            <div class="bl-1">
                <div class="section-heading">
                    <h3 class="text-center">Your Posts</h3>
                </div>
                <div class="text-center">
                    <a href="yourPosts.php" class="w-100 btn btn-lg btn-primary dark">See Your Posts</a>
                </div>
            </div>
            <div class="bl-2">
                <div class="section-heading">
                    <h3 class="text-center">Your Dog's Info</h3>
                    <div class="info">
                        <div class="flex flex-jc-se flex-ai-c">

                            <h2 class="info-title">Dog's Name: </h2>
                            <h4 class="info-item">
                                <?php echo $name; ?>
                            </h4>
                        </div>
                        <div class="flex flex-jc-se flex-ai-c">

                            <h2 class="info-title">Dog's Breed: </h2>
                            <h4 class="info-item">
                                <?php echo $breed; ?>
                            </h4>
                        </div>
                        <div class="flex flex-jc-se flex-ai-c">

                            <h2 class="info-title">Dog's Age: </h2>
                            <h4 class="info-item">
                                <?php echo $age; ?>
                            </h4>
                        </div>
                        <div class="flex flex-jc-se flex-ai-c">

                            <h2 class="info-title">Dog's Sex: </h2>
                            <h4 class="info-item">
                                <?php echo $gender; ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile">
            <div class="section-heading">
                <h3 class="text-center">Profile</h3>
            </div>
            <h3 class="mt-4">
                <?php echo $username; ?>
            </h3>
            <h3 class="mt-4">
                <?php echo $email; ?>
            </h3>

            <form action="edit.php" method="post">
                <input type="hidden" name="user-id" value="<?php echo $id; ?>" />
                <input type="submit" name="edit" class="w-100 btn btn-lg btn-primary" value="Edit Profile" />
            </form>
            <?php if ($isAdmin == 1):?>
            <a href="admin.php" class="w-100 btn btn-lg btn-primary">Admin Dashboard</a>
            <?php endif; ?>
        </div>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>