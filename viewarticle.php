
<?php

// session_start();
// if(empty($_SESSION['id'])):
// header('Location: signin.html');
// endif;
include("fyp/hearder.php");?>
  <body>
<?php include("fyp/dashsidebar.php");?>
<?php include("fyp/topbar.php");?>

<div class="content">

<section class="services" id="services">
      <div class="title reveal">
      
        <p>  </p>
      </div>


      <?php
      include "fyp/conn.php";
      $id=$_GET['id'];
      $sql = "SELECT * FROM article where Article_id ='$id'";
      $result = $con->query($sql);
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>
          <h2 class="section-title"> <?php echo $row['Article_title']; ?></h2>
      <div class="content1">

        <?php echo $row['long_desc']; ?>
        </div>
  

          <?php		}
			}
		?>
    </section>


</div>
<script src="script.js" charset="utf-8"></script>
<?php include("fyp/script.php");?>
</body>
</html>



