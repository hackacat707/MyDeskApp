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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $priority = $_POST['priority'];
    $type = $_POST['type'];
    $message = $_POST['message'];
$sql="Insert INTO contactInfo (name,email,phone,priority,type,message) VALUES ('$name','$email','$phone' ,'$priority','$type','$message')";
if(!mysqli_query($con,$sql))
{
echo ' Fail to Send Message';
}
else
{
echo 'Message Sent Successfully '
}
header("refresh:2; url= index.html");

?>




