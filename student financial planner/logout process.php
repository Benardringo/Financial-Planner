<?php

session_start();
if(empty($_SESSION['id'])):
header('Location: home.php');
endif;

include("fyp/hearder.php");?>
	session_destroy();

  <body>


<?php include("fyp/dashsidebar.php");?>
<input type="checkbox" id="check">
<?php include("fyp/topbar.php");?>

<div class="content">
<div style="width:150px;margin:auto;height:500px;margin-top:300px">	
<meta http-equiv="refresh" content="2;url=home.php">
 <progress max=100><strong>Progress: 80% done. </strong></progress><br>
 <span  class="itext">Logging out please wait!...</span>
</div>

<?php include("fyp/script.php");?>
</body>
</html>


