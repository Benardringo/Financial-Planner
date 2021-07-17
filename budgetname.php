<?php
session_start();
    $id=$_SESSION['id'];
    
include 'fyp/conn.php';

$name= $_POST['b_name'];

$sql = "INSERT INTO budget(budget_name,id) VALUES ('$name',$id)";
if(mysqli_query($con, $sql)){
    header("Location: spend.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
  ?>