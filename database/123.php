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

// sql to create table
$sql = "CREATE TABLE expense
(
  expense_id INT NOT NULL AUTO_INCREMENT,
  amount INT NOT NULL,
  category VARCHAR(20) NOT NULL,
  expense_name VARCHAR(20) NOT NULL,
  PRIMARY KEY (expense_id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>