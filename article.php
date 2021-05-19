
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
      <?php $x=1; while($x<5):?>
        <div class="card reveal">
          <img src="images/article.jpg" alt="Girl in a jacket" width="330" height="250">
          <div class="info">
            <h3> author: massawe</h3>
            <p>This article contain skills how your can keep your finance growing</p>
          </div>
          </div>
      <?php $x++; endwhile; ?>
      </div>
    </section>


</div>
<script src="script.js" charset="utf-8"></script>
<?php include("fyp/script.php");?>
</body>
</html>



