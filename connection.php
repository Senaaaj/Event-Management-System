<?php
$servername = "localhost";  // server name
$username = "root";  // username
$password = "";  // database password
$dbname = "login_system";  // database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>