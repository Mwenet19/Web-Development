<?php
$servername = "localhost";
$username = "pipo";
$password = "password";
$db_name = "classicmodels";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
