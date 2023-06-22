<?php
require_once "auth.php";
echo /*html*/"<br>" . "admin in the house";


$query = "SELECT * FROM users;";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo /*html*/"<p>" . $row['id'] . /*html*/"</p>";
    echo /*html*/"<p>" . $row['name'] . /*html*/"</p>";
    echo /*html*/"<p>" . $row['email'] . /*html*/"</p>";
}
include_once "layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
<?php include_once "layout/navbar.php"; ?>

    <table>
    <caption>Table of Users</caption>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>

        </tr>
        <?php
            $queries = "SELECT * FROM users;";
            $users_res = $con->query($queries);
            if ($users_res->num_rows > 0) {
                while ($rows = mysqli_fetch_assoc($users_res)): ?>
                    <tr>
                    <td>
                        <?php print $rows['id']; ?>
                    </td>
                    <td>
                        <?php print $rows["name"]; ?>
                    </td>
                    <td>
                        <?php print $rows["email"]; ?>
                    </td>
                    <td>[ <a href="">Edit</a> ] [ <a href="">Del</a> ]</td>
                    </tr>
                <?php endwhile;
            } else {
                echo /*html*/"<br>" . "Nope";
            } ?>
    </table>
<?php include_once "layout/footer.php"; ?>

</body>

</html>
