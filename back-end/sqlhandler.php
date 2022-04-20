<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "tgr_merch";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>