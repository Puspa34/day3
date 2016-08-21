<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname= "project";
  
$conn=  new mysqli($servername, $username, $password, $dbname);

if($conn-> connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}

$sql = "INSERT INTO student_info (id,name, address,phone_no )
VALUES ('5', 'Ram', 'kathamndu' , '9804453224')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


