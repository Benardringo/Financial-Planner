
<?php

include("fyp/hearder.php");?>
  <body>
<?php include("fyp/dashsidebar.php");?>
<?php include("fyp/topbar.php");?>

<div class="content">

<form action="budgetname.php" method="POST">
  <label style="color: #073d80; font-size: 30px;">Budget name</label><br>

  <input type="text" required placeholder="Enter your budget name" name="b_name" style ="width: 30%;padding: 5px 20px;margin: 5px 0;display: inline-block;border: 2px solid #ccc;border-radius: 4px;" ><br>
  <input  class="button" type="submit" value="create" style= "border-radius: 20px;" >
</form>
<h2 style="color: #073d80; font-size: 30px;">Expense categories</h2>





<?php
include "fyp/conn.php";
$qry=$con->query("select * from items");

while($row=$qry->fetch_assoc()):
?>
<div class="item_all">
<button data-id="<?php echo $row['item_id'] ?>" class="item" onclick = "funguaForm()"><?php echo $row['item_name'] ?></button>
</div>

<?php endwhile; ?>
<script src="script.js" charset="utf-8"></script>
<?php include("fyp/	script.php");?>
</body>
</html>

