<?php
	include('fyp/conn.php');
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	
	mysqli_query($con,"update `users` set first_name='$firstname', Last_name='$lastname', gender='$gender', Email='$email' where id='$id'");
	header('location:demo.php');
?>