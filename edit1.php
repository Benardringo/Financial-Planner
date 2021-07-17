

<?php

$con = mysqli_connect("localhost", "username", "password", "financial"); 
$id=$_GET['id'];


$query = $con->query("SELECT * FROM expense,budget,HAS WHERE expense.expense_id = HAS.expense_id AND budget.budget_id=HAS.budget_id AND id='$id'");
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
<form method="POST" action="update.php?id=<?php echo $id; ?>">
 <label>Firstname:</label><input type="text" value="<?php echo $row['first_name']; ?>" name="Budget_name"></br>
 <label>Lastname:</label><input type="text" value="<?php echo $row['Last_name']; ?>" name="category"></br>
 <label>Gender:</label><input type="text" value="<?php echo $row['gender']; ?>" name="gender"></br>
 <label>  Email:</label><input type="text" value="<?php echo $row['Email']; ?>" name="email"></br>
 <input type="submit" name="submit">
</form>
</div>
</body>
</html>