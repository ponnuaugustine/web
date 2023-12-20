<html>
<body>
Welcome <?php echo $_POST["name"]; ?><br>
Your course is: <?php echo $_POST["course"]; ?><br>
Age: <?php echo $_POST["age"]; ?><br>

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

$name = $_POST['name'];
$course = $_POST['course'];
$age = $_POST['age'];

$sql = "INSERT INTO student (name, course, age)
VALUES ('$name', '$course', '$age')";

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

</body>
</html>
