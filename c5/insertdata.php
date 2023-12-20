 <?php
$servername = "localhost";
$username = "23mca044";
$password = "2969";
$dbname = "23mca044";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (name, course, age)
VALUES ('Sandra', 'BBA', '19')";

if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
