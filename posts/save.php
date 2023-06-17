<?php 
$conn = require_once 'Connection.php';

$id = $_POST['id'] ?? '';
if (isset($id)) {
    $conn->updateNote($_POST);
} else {
    $conn->addNote($_POST);
}

header('Location: index.php');