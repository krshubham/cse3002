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
else
{
$sql = "UPDATE student SET name='d' WHERE gpa=5";




if ($conn->query($sql) === TRUE) {


echo "Record updated successfully <br>";


} else {


echo "Error updating record: " . $conn->error;


}


}


$sql = "SELECT FirstName, LastName, Age from Persons";


$result = $conn->query($sql);


if ($result->num_rows > 0) {




Update


// output data of each row


echo "First Name LastName Age ";


while($row = $result->fetch_assoc()) {


echo "<br>" . $row["FirstName"]. " " . $row["LastName"]. " " . $row["Age"];


}


} else {


echo "0 results";


}
$sql="select regno,name,gpa,email from STUDENT ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {


// output data of each row


echo "First Name LastName Age ";


while($row = $result->fetch_assoc()) {


echo "<br>" . $row["regno"]. " " . $row["name"]. " " .
$row["gpa"]." ". $row["email"];


}


} else {


echo "0 results";


}


$conn->close();
?>