<?php

//database conectivite
include("fyp/conn.php");

//validation of submit page
	if (isset($_POST['submit'])) {
	$name;
	$size;
	$tmp_name;
	$error;
	$type;
	$file;
	 

		$file =	$_FILES['file'];
		$fileName =	$_FILES['file']['name'];
		$fileSize =	$_FILES['file']['size'];
		$fileTmp =	$_FILES['file']['tmp_name'];
		$fileError=	$_FILES['file']['error'];
		$fileType =	$_FILES['file']['type'];
		$fileExt=	explode('.', $fileName);
		$fileActualExt=strtolower(end($fileExt));
		$allowed =	array('jpg','npg','jpeg','pdf','doc','docx','png');
		

if (in_array($fileActualExt, $allowed)) {
	if ($fileError===0) {
			$filenameNew=uniqid('',true).".".$fileActualExt;
			$fileDestination = '.../image/'.$filenameNew;
			//query of upload proposal file
			$uplod="INSERT INTO article (Article_title,short_desc,long_desc,Article_picture) VALUES('".$title."','".$short_desc."','".$long_desc."','".$NewImageName."')";
		// header('location: index.php'); 
			$result = mysqli_query($con,$upload)or die(mysqli_error($con));
			if ($result) {
				move_uploaded_file($fileTmp, $fileDestination);
				header("location:article.php");
			}	
	} else {
		echo "upload file failed";
	}
		
}

	}

