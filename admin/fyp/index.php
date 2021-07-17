<?php
 
session_start();
if(empty($_SESSION['id'])):
header('Location: signin.html');
endif;

include("fyp/hearder.php");?>
  <body>


<?php include("fyp/dashsidebar.php");?>
<input type="checkbox" id="check">
<?php include("fyp/topbar.php");?>

<div class="content">

</div>

<?php include("fyp/script.php");?>
</body>
</html>