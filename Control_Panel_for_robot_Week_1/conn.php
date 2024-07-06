<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3307";
$dbname = "robotcpanel"; // Add your database name here

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

