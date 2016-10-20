<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$sql="select regno,name,gpa,email from STUDENT where gpa<9";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
echo "First Name LastName Age ";
while($row = $result->fetch_assoc()) {
echo "<br>" . $row["regno"]. " " . $row["name"]. " " .
$row["gpa"]." ". $row["email"];
}
} 
else {
echo "0 results";
}
$conn->close();
?>