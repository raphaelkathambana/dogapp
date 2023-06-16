<?php

if (isset($_POST['verify-key'])) {
    if (isset($_POST['key']) === "UUIIDDK") {
        header('Location: resetPassword.php');
    } else {
        $keyInvalid = "Wrong Key Used";
    }
}