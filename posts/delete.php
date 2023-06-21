<?php

$conn = require_once '../auth.php';
use Connection as conn;
$conn = new conn;
$notes = $conn->getNotes();

$conn->deleteNote($_POST['id']);

header('Location: index.php');
