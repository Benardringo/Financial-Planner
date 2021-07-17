<?php

session_start();
    $id=$_SESSION['id'];

     include('conn.php');
    $query=mysqli_query($con, "select * from users where id='$id'");
    $num=mysqli_fetch_array($query);
    // if (mysqli_num_rows($row)>0){
    //     echo 'yes';
    // }
     $bnc=$num['balance'];
      $balance=$_POST['balance'];
     $balance1 =$bnc + $balance;
     echo $bnc+1;
  
     $sql="UPDATE users SET balance='$balance1 WHERE id='$id'";
   
?>