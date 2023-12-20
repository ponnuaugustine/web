<?php
$servername = "localhost";
$username= "23mca044";
$password = "2969";
$dbname = "23mca044";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
	die("connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
