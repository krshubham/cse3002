<?php

$servername ="localhost";
$username = "root";
$password = "root";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="CREATE TABLE STUDENT(regno varchar(15) primary key,name varchar(15),gpa float(10),email varchar(25))";
if($conn->query($sql)===TRUE){echo "table student created";}
else{echo "error creating table:".$conn->error;}
?>