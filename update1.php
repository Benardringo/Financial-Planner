<?php
	include('fyp/conn.php');
	$id=$_GET['id'];
	
	$amount=$_POST['amount'];

	
	mysqli_query($con,"update `expense` set amount='$amount' where expense_id='$id'");
	header('location:index.php');
?>