
<?php

include("fyp/hearder.php");?>
  <body>
<?php include("fyp/dashsidebar.php");?>
<?php include("fyp/topbar.php");?>

<div class="content">
<?php
include "fyp/conn.php";
$qry=$con->query("select * from budget order by budget_id desc");
$row=$qry->fetch_assoc();
?>
<h2 style="color: #073d80; font-size: 30px; text-align: center;"><?php echo $row['Budget_name']; ?></h2>

<h2 style="color: #073d80; font-size: 20px; ">Expenses</h2>


<?php
include "fyp/conn.php";
$qry=$con->query("select * from items");

while($row=$qry->fetch_assoc()):
?>

<div class="item_all">
<button data-id="<?php echo $row['item_id'] ?>" class="item" onclick = "funguaForm<?=$row['item_id']?>()"><?php echo $row['item_name'] ?></button>
</div>


<div class="form-popup" id="myForm<?=$row['item_id']?>">
  <form action="spendphp.php" method="POST" class="form-container">
  
    <h1><?php echo $row['item_name'] ?></h1>
    <input type="hidden" name="id" value ="<?php echo $row['item_id'] ?>">
    <input type="hidden" name="name" value ="<?php echo $row['item_name'] ?>">
    <input type="hidden" name="category" value ="<?php echo $row['item_category'] ?>">

    <label><b>Amount</b></label>
    <input type="text" placeholder="Tsh" name="amount" required></br>
    <label><b>item</b></label>
    <input type="text" placeholder="how many items" name="item" required><br>

    <button type="submit" class="btn">Add</button>
    <button type="button" class="btn cancel" onclick="fungaForm<?=$row['item_id']?>()">cancel</button>
  </form>
</div>

<script>

function funguaForm<?=$row['item_id']?>() {
  document.getElementById("myForm<?=$row['item_id']?>").style.display = "block";
}

function fungaForm<?=$row['item_id']?>() {
  document.getElementById("myForm<?=$row['item_id']?>").style.display = "none";
}
</script>

<?php endwhile; ?>
<button  class="item" onclick = "funguaFarm()">+</button>

</div>

<script src="script.js" charset="utf-8"></script>
<?php include("fyp/script.php");?>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=number] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=number]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #073d80;;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 45%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div class="form-popup" id="myFarm">
  <form action="addex.php" method="POST" class="form-container">
  
    <label><b>Category</b></label>
    <input type="text" placeholder="category" name="category" required></br>
    <label><b>expense name</b></label>
    <input type="text" placeholder="item name" name="item" required><br>

    <button type="submit" class="btn">Add</button>
    <button type="button" class="btn cancel" onclick="fungaFarm()">cancel</button>
  </form>
</div>

<script>

function funguaFarm() {
  document.getElementById("myFarm").style.display = "block";
}

function fungaFarm() {
  document.getElementById("myFarm").style.display = "none";
}
</script>
</body>
</html>