

<?php

$con = mysqli_connect("localhost", "username", "password", "financial"); 
$id=$_GET['id'];
$query=mysqli_query($con,"SELECT * from expense where expense_id='$id'");
$row=mysqli_fetch_array($query);
include("fyp/hearder.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
<style>
input[type=text], select {
width: 30%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

input[type=submit] {
width: 30%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #45a049;
}


</style>
</head>
<body>

<!--header area start-->
<header>
<label for="check">
  <i class="fas fa-bars" id="sidebar_btn"></i>
</label>
<div class="left_area">
  <h3>Financial <span>Planner</span></h3>
</div>

</header>
<html>

<?php include("fyp/admin.php");?>




<div class="content">
<form method="POST" action="update1.php?id=<?php echo $id; ?>">
  <label>Expense amount:</label><input type="text" required  value="<?php echo $row['amount']; ?>" name="amount"></br>

  <input type="submit" name="submit" value="Update">
</form>
</div>
</body>
</html>