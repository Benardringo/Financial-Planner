<?php session_start();

include('fyp/conn.php');

if(isset($_POST['login']))
{

$email=$_POST['email'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($con,$email);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

$query=mysqli_query($con,"select * from users where Email='$user' and Password='$pass'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           
           $name=$row['Email'];
           $counter=mysqli_num_rows($query);
           $id=$row['id'];
           
	  	if ($counter == 0) 
		  {	
		  echo "<script type='text/javascript'>alert('Invalid email or Password!');
		  document.location='signin.html'</script>";
		  } 
		 
	  else
		  {

		$_SESSION['id']=$id;	
	  	$_SESSION['email']=$name;
	  	 	if ($_SESSION['id']==1) 
		  {	
	    echo "<script type='text/javascript'>document.location='demo.php'</script>";

		  }
	
	  		
	    echo "<script type='text/javascript'>document.location='index.php'</script>";
	  }
}	 
?>

