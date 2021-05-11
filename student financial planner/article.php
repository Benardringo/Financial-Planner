
<?php include("fyp/hearder.php");?>
  <body>


<?php include("fyp/dashsidebar.php");?>
<?php include("fyp/topbar.php");?>

<div class="content">


 <section class="services" id="services">
      <div class="title reveal">
        <h2 class="section-title">Articles</h2>
      </div>
      <?php 
$x=1;
while($x<5):
  ?>
      <div class="content">     
         <div class="card reveal">
          <div class="service-icon">
            <i class="fas fa-palette"></i>
          </div>
          <div class="info">
            <h3>Web Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>      
         </div>
      </div>
      <?php 
$x++;
endwhile; ?>
</div>
</section>

</div>
<script src="script.js" charset="utf-8"></script>
<?php include("fyp/script.php");?>
</body>
</html>



