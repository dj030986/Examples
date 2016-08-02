<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection has failed: " . $conn->connect_error);
} 
echo "";
?>