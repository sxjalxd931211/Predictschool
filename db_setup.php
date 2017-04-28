<?php
$servername = "localhost";
$username = "jsun35";
$password = "walxd1113";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


?>


