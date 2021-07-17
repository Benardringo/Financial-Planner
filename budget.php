

      <?php
	  session_start();
	  $id=$_SESSION['id'];
	  include("fyp/hearder.php");?>
		<body>
	  
	  
	  <?php include("fyp/dashsidebar.php");?>
	  <input type="checkbox" id="check">
	  <?php include("fyp/topbar.php");?>
	  
	  <div class="content">
	  <h2 style="color: #073d80; font-size: 30px;">My budget</h2>


	  <?php
	  include "fyp/conn.php";
	
	  $sql = "SELECT * FROM budget where id ='$id' order by budget_id desc";
	  
      $result = $con->query($sql);
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>
        <div class="card reveal">
        <div class="info">
            <a href="viewbudget.php?id=<?php echo $row['budget_id']; ?>"><h3><?php echo $row['Budget_name']; ?></h3></a>
          </div>
          </div>

          <?php		}
			}
		?>
		<button class="button button2"  onclick = "openpage()">New Budget</button><br>	
	  </div>
	  
	  <?php include("fyp/script.php");?>
	  <script>
function openpage() {
	window.location = "spendes.php";
}
</script>

	  </body>
	  </html>
      