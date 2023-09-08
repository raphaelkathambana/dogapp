<?php

if (isset($_POST['contact'])) {
    echo /*html*/ "<pre>";
    var_dump($_POST);
    echo /*html*/ "</pre>";
} else {
    echo "Nope" . /*html*/ "<br>";
}

