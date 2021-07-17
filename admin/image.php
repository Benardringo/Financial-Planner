
<?php
include('conn.php');
// Insert record
if(isset($_POST['submit'])){
		
	$title = $_POST['title'];
	$short_desc = $_POST['short_desc'];
	$long_desc = $_POST['long_desc'];
	$output_dir = "css/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

	if($title != ''){
		if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
		 $sql="INSERT INTO contents(title,short_desc,long_desc,file_name) VALUES('".$title."','".$short_desc."','".$long_desc."','".$NewImageName."')";
		// header('location: index.php');
		if (mysqli_query($con, $sql)) {
			echo "successfully !";
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($con);
	 }
		
	
	}
}


	
	/* Try to create the directory if it does not exist */
	

?>