<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";

$conn= new mysqli($servername , $username , $password ,$dbname);
if($conn->connect_error){
	die("connection failed" .$conn->connect_error);
}

$sql= "UPDATE student_info  set address='ktm' where id=2";

if($conn->query($sql) === TRUE){
	echo"record updated successfully";
}else{
	echo"error updating record" . $conn->error;
}
$conn->close();
?>
