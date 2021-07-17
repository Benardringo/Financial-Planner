
<!DOCTYPE html>
<html>
<head>
	<title>Integrate CKeditor to HTML page and save to MySQL with PHP</title>

	<!-- CSS -->
	<style type="text/css">
	.cke_textarea_inline{
		border: 1px solid black;
	}
	</style>

	<!-- CKEditor -->	
	<script src="ckeditor/ckeditor.js" ></script>
</head>
<body>

	<form method='post' action='image.php'>
		Title : 
		<input type="text" name="title" ><br>

		Short Description: 
		<textarea id='short_desc' name='short_desc' style='border: 1px solid black;'  ></textarea><br>

		Long Description: 
		<textarea id='long_desc' name='long_desc' ></textarea><br>
		  <input type="file" name="image[]" />
          <br><br>
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
</body>
</html>