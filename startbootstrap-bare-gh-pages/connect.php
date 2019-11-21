<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'id11438325_mydeskapp';
$DATABASE_PASS = '5minecrafts@boxes!';
$DATABASE_NAME = 'id11438325_mydeskapp';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (!$con)
{
	echo 'Not Connected to the server';
}
if (!mysqli_select_db($con,= 'id11438325_mydeskapp'))
{
echo 'Database is not selected';
}
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $call = $_POST['call'];
    $priority = $_POST['priority'];
    $type = $_POST['type'];
    $message = $_POST['message'];
$sql="Insert INTO id11438325_mydeskapp (name,email,phone,call,priority,type,message) VALUES ('$name','$email','$phone','$call','$priority','$type','$message')";
if(!mysqli_query($con,$sql))
{
echo ' Not Inserted';
}
else
{
echo 'Inserted'
}
header("refresh:2; url= index.html");

?>




