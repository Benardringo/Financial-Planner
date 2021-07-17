<?php
include "fyp/con.php";
// Insert record
if(isset($_POST['submit'])){
		
    $title = $_POST['title'];
    $short_desc = $_POST['short_desc'];
    $long_desc = $_POST['long_desc'];

    if($title != ''){
        
        mysqli_query($con, "INSERT INTO contents(title,short_desc,long_desc) VALUES('".$title."','".$short_desc."','".$long_desc."') ");
        header('location: index.php');
    }
}

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
<form method='post' action=''>
		Title : 
		<input type="text" name="title" ><br>

		Short Description: 
		<textarea id='short_desc' name='short_desc' style='border: 1px solid black;'  ></textarea><br>

		Long Description: 
		<textarea id='long_desc' name='long_desc' ></textarea><br>

		<input type="submit" name="submit" value="Submit">
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