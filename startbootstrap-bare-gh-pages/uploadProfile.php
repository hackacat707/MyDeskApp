<?php
session_start();
include_once 'databaseConnection.php';
$id = $_SESSION['id'];

if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png');
	if (in_array($fileActualExt, $allowed)){
		if ($fileError=== 0){
			if ($fileSize < 500000 ){
				$fileNameNew = "profile".$id.".".$fileActualExt;
				$fileDestination = 'images/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE imagedb SET status = 0 WHERE userid='$id';";
				$result = mysqli_query($con, $sql);
				//echo "Picture uploaded";
				header ("Location: home.php");
				
			}
			else 
			{
				echo "File is too big";
			}
		}
		else 
		{
			echo "There was an error uploading your file";
			echo mysqli_error($con);
		}
	}
	else 
	{
		echo "You cannot upload files of this type";
	} 
}
?>
