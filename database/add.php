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
$sql = "INSERT INTO expense (amount,category,expense_name)
VALUES ('600000','home','rent')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>