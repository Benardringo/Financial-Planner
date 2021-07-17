<?php
include 'fyp/conn.php';

$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$balance  = 0;

$sql = "INSERT INTO users(first_name, last_name, Email,gender,Password,balance) VALUES ('$first_name', '$last_name', '$email', '$gender', '$password','$balance')";
if(mysqli_query($con, $sql)){
    header("Location: signin.html");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
  ?>