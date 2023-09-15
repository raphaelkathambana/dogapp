<?php
require_once 'vendor/autoload.php';

$mysqliConn = new MysqliConnection();
$con = $mysqliConn ->getConnection();
include_once "layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>
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
                <?php $idNum = $rows['id']; ?>
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
                    <td>[ <a href="edit.php?id=<?php echo $idNum; ?>">Edit</a> ] [ <a href="">Del</a> ]</td>
                    </tr>
                <?php endwhile;
            } else {
                echo /*html*/"<br>" . "Nope";
            } ?>
    </table>
<?php include_once "layout/footer.php"; ?>

</body>

</html>
