<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mifis";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} 