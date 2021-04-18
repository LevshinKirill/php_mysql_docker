<?php
$serverName = "db";
$userName = "root";
$password = "example";
$dbName = "db";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";