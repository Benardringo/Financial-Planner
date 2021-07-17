
<?php

session_start();
if(empty($_SESSION['id'])):
header('Location: signin.html');
endif;

include("fyp/hearder.php");?>
  <body>
<?php include("fyp/dashsidebar.php");?>
<?php include("fyp/topbar.php");?>

<div class="content">

<section class="services" id="services">
      <div class="title reveal">
        <h2 class="section-title">Articles </h2>
        <p>  </p>
      </div>
      <div class="content1">


      <?php
      include "fyp/conn.php";
      $sql = "SELECT * FROM article";
      $result = $con->query($sql);
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

        <div class="card reveal">
        <div class="info">
            <h3><?php echo $row['Article_title']; ?></h3>
          </div>
          <a href="viewarticle.php?id=<?php echo $row['Article_id']; ?>" ><img src="images/article.jpg" alt="Girl in a jacket" width="330" height="250"></a>
          <div class="info">
          <p><?php echo $row['short_desc']; ?></p>
          </div>
          </div>

          <?php		}
			}
		?>
      </div>
    </section>


</div>

<?php include("fyp/script.php");?>
</body>
</html>



