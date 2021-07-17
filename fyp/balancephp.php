<?php

session_start();
    $id=$_SESSION['id'];

    include('conn.php');
    $qry=mysqli_query($con,"SELECT * from users where id='6'");
    $row=$qry->fetch_assoc();
    $bnc=$row['balance'];
	$balance=$_POST['balance'];
	$balance1 =$bnc + $balance;
	
    mysqli_query($con,"update `users` set balance='$balance1' where id='6'");
   
    //header('location:index.php');
    echo 'ok';
?>