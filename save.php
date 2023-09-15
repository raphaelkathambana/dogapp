<?php

// $conn = require_once 'auth.php';
// use Connection;
require_once 'vendor/autoload.php';

$conn = new Connection;
$notes = $conn->getNotes();

$id = $_POST['id'] ?? '';
if (isset($id) && $id != '') {
    $conn->updateNote($_POST);
} else {
    $conn->addNote($_POST);
}

header('Location: yourPosts.php');
