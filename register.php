<?php
include_once "layout/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
</head>

<body>
    <?php include_once "layout/navbar.php"; ?>
    <div class="container">
        <div class="form-container">
            <div class="heading-icon">
                <img class="mb-4" src="/images/icons8_paw_prints_96px_1.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Register</h1>
            </div>
            <form action="registration.php" method="post" name="register" autocomplete="off">
                <label for="fname">First Name:</label>
                <input class="form-control" type="text" id="fname" name="first-name" placeholder="Your name.." required />
                <label for="lname">Last Name:</label>
                <input class="form-control" type="text" id="lname" name="last-name" autocomplete="off"
                    placeholder="Your last name.." />
                <label for="email">Email:</label>
                <input class="form-control" type="text" id="email" autocomplete="off" name="email"
                    placeholder="Your email.." required />
                <label for="psw">Password:</label>
                <input class="form-control" type="password" id="psw" autocomplete="off" name="psw"
                    placeholder="Your password.." required />
                <label for="psw-repeat">Repeat Password:</label>
                <input class="form-control" type="password" id="psw-repeat" autocomplete="off" name="psw-repeat"
                    placeholder="Repeat your password.." required />
                <input class="btn btn-lg btn-primary m-10" type="submit" value="Register" name="register"/>
            </form>
        </div>
    </div>
<?php include_once "layout/footer.php"; ?>

</body>

</html>
