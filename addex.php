<?php
 include 'fyp/conn.php';


$category= $_POST['category'];
$item= $_POST['item'];


$sql = "INSERT INTO items (item_category,item_name) VALUES ('$category','$item')";

if(mysqli_query($con, $sql)){
    header("Location: spend.php");
       }else{
       echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
   }

 ?>