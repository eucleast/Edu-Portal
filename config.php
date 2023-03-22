<?php
$hostname = "localhost"; // replace with your database hostname
$username = "root"; // replace with your database username
$password = "password"; // replace with your database password
$dbname   = "login_db"; // replace with your database name

// Create database connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
