<?php
  include('fyp/conn.php');
  $id=$_GET['id'];
  $query=mysqli_query($con,"select * from users where id='$id'");
  $row=mysqli_fetch_array($query);
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

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>




<div>
<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label>Firstname:</label><input type="text" value="<?php echo $row['first_name']; ?>" name="firstname"></br>
    <label>Lastname:</label><input type="text" value="<?php echo $row['last_name']; ?>" name="lastname"></br>
    <label>Gender:</label><input type="text" value="<?php echo $row['gender']; ?>" name="gender"></br>
    <label>  Email:</label><input type="text" value="<?php echo $row['Email']; ?>" name="email"></br>
    <input type="submit" name="submit">
  </form>
</div>
</body>
</html>