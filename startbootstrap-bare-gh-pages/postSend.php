
<?php
include_once 'databaseConnection.php';
if (!$con)
{
	echo 'Not Connected to the server';
}
if (!mysqli_select_db($con, 'id11438325_mydeskapp'))
{
echo 'Database is not selected';
}

if(isset($_POST['submit']))
{
    $sql = "INSERT INTO host_place (title, address, price, rating, details, phone_no, email)
    VALUES ('".$_POST['title']."','".$_POST["address"]."','".$_POST["price"]."','".$_POST["rating"]."', '".$_POST["details"]."','".$_POST["phoneNo"]."', '".$_POST["email"]."')";
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
				$fileNameNew = uniqid(',', true).".".$fileActualExt;
				$fileDestination = 'images/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				
			}
			else 
			{
				echo "File is too big";
			}
		}
		else 
		{
			echo "There was an error uploading your file";
		}
	}
	else 
	{
		echo "You cannot upload files of this type";
	} 
	
    mysqli_query($con,$sql);
    header('Location: home.php');
}

else if (!mysqli_query($con,$sql))
{
    echo "Not posted successfully";
    echo (mysql_errno);
}

?>
