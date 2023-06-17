<?php 
$conn = require_once 'Connection.php';

$conn->deleteNote($_POST['id']);

header('Location: index.php');