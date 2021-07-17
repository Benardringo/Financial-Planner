

<?php
session_start();
if(empty($_SESSION['id'])):
header('Location: signin.html');
endif;

include("fyp/hearder.php");?>
  <body>
<?php include("fyp/admin.php");?>

<!--header area start-->
<header>
  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left_area">
    <h3>Financial <span>Planner</span></h3>
  </div>
</header>
<html>

<div class="content">

	<form method='post' action='image.php'>
		Title : 
		<input type="text" name="title" ><br>

		Short Description: 
		<textarea id='short_desc' name='short_desc' style='border: 1px solid black;'  ></textarea><br>

		Long Description: 
		<textarea id='long_desc' name='long_desc' ></textarea><br>
		  <!-- <input type="file" name="file" /> -->
          <br><br>
		<input type="submit" required name="submit" value="Submit">
	</form>
	
	<!-- Script -->
	<script type="text/javascript">
	
		// Initialize CKEditor
		CKEDITOR.inline( 'short_desc');

		CKEDITOR.replace('long_desc',{

			width: "500px",
        	height: "200px"
   
		}); 
	
    	
	</script>
</div>

<?php include("fyp/script.php");?>
</body>
</html>