<?php
$servername = "localhost";


$username = "root";


$password = "root";


$dbname = "myDB";




// Create a new instance connection


$conn = new mysqli($servername, $username, $password, $dbname);





// Check connection


if ($conn->connect_error)


{

//else end and die
die("Connection failed: " . $conn->connect_error);


}


// sql to create table


$sql = "insert into STUDENT(regno,name,gpa,email) values ('15BCE1283', 'Kumar Shubham',8,'k@gmail.com')";
$sql = "insert into STUDENT(regno,name,gpa,email) values ('15BCE1273', 'aman saha',7,'a@gmail.com')";
$sql = "insert into STUDENT(regno,name,gpa,email) values ('15BCE1274', 'dinesh reddy',7,'d@gmail.com')";




if ($conn->query($sql) === TRUE)


{


echo "Record Inserted successfully";


}


else


{ echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();