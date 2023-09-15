<?php
include_once "layout/header.php";
echo /*html*/"
<div>
<h3 class='text-center'>Email was Sent Successfully!</h3>
</div>
";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Validate Key</title>
</head>

<body>
    <?php include_once "layout/navbar.php"; ?>
    <div class="section-heading">
        <h3 class="text-center">Verify Email</h3>
    </div>
    <div class="form-container heading">
        <form action="verifyKey.php" method="post">
            <label for="key">
                <h2>Enter Key</h3>
            </label>
            <input class="form-control" type="text" name="key" id="key" autofocus="on" autocomplete="off" />
            <br>
            <input class="btn btn-primary mt-3 mb-5" type="submit" name="verify-key" value="Validate" />
        </form>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>