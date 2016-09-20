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


// sql to create table


$sql = "insert into STUDENT(regno,name,gpa,email) values ('1', 'a',5,'a@gmail.com')";
$sql = "insert into STUDENT(regno,name,gpa,email) values ('2', 'b',6,'b@gmail.com')";
$sql = "insert into STUDENT(regno,name,gpa,email) values ('3', 'c',7,'c@gmail.com')";




if ($conn->query($sql) === TRUE)


{


echo "Record Inserted successfully";


}


else


{ echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();