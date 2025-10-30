<?php
$host = 'localhost';
// $host = '127.0.0.1';
$db   = 'aandrduty';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
