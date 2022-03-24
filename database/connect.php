<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db_name = 'portfolio';

$conn = new mysqli($host, $user, $pass, $db_name);

if($conn -> connect_error) {
    die('Database Connection error: ' . $conn -> connect_error);
} else 

?>