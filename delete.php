<?php
	$id=$_GET['id'];
	include('fyp/conn.php');
	mysqli_query($con,"delete from users where id='$id'");
	header('location:demo.php');
?>