<?php

require_once 'vendor/autoload.php';

use Connection as conn;
$conn = new conn;
$notes = $conn->getNotes();

$conn->deleteNote($_POST['id']);

header('Location: yourPosts.php');
