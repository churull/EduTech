<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'techedu';

// Create a new mysqli instance
$con = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}
?>
