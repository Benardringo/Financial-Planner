<?php

session_start();
    $id=$_SESSION['id'];

     include('fyp/conn.php');
    $query=mysqli_query($con, "select * from users where id='$id'");
    $num=mysqli_fetch_array($query);
     $bnc=$num['balance'];
      $balance=$_POST['balance'];
     $balance1 =$bnc + $balance;
  
     $sql="UPDATE users SET balance='$balance1' WHERE id='$id'";

if ($con->query($sql) === TRUE) {
 header('location:index.php');
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
   
?>