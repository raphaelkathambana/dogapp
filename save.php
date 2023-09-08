<?php

$conn = require_once 'auth.php';
use Connection;
$conn = new Connection;
$notes = $conn->getNotes();

$id = $_POST['id'] ?? '';
if (isset($id) && $id != '') {
    // nl2br($_POST["body"]);
    $conn->updateNote($_POST);
} else {
    $conn->addNote($_POST);
}

header('Location: yourPosts.php');
