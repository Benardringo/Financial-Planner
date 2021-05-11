<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mifis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO users (first_name,Last_name,Email,gender,Password)
VALUES ('benard','ringo','ringo@gmail.com','male','123')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>