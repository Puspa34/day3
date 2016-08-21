<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,address,phone_no FROM student_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - name: " . $row["name"]. " -address: " . $row["address"]. " - phone_no: " .$row["phone_no"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
