<?php

if (isset($_POST['verify-key'])) {
    if (($_POST['key']) == "UUIIDDK") {
        header('Location: resetPassword.php');
    } else {
        echo "Wrong Key Used";
        var_dump($_POST);
    }
}
