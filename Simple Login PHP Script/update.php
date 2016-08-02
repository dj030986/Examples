<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

// Create connection to database
$conn = new mysqli($servername, $username, $password, $dbname);
//require_once('/connect.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Get variables from HTML Form
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$password = $_POST['Password'];
$email = $_POST['email'];


// Create SQL Query
$sql = "INSERT INTO users (FirstName, LastName, Password, Email)
VALUES ('$FirstName', '$LastName', '$password', '$email')";


// Post message dependant on result
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully, Redirect to Login in progress";
	header( "refresh:3;url=login.php" );
} else {
    echo "Sorry, an error occured, please wait";
	header("refresh:3;url=register.php");
}

// Kill connection to database
$conn->close();
?>
