
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
if (!mysqli_select_db($con, 'id11438325_mydeskapp'))
{
echo 'Database is not selected';
}

if(isset($_POST['submit']))
{
    $sql = "INSERT INTO host_place (title, address, price, rating, details, phone_no, email)
    VALUES ('".$_POST['title']."','".$_POST["address"]."','".$_POST["price"]."','".$_POST["rating"]."', '".$_POST["details"]."','".$_POST["phoneNo"]."', '".$_POST["email"]."')";
    mysqli_query($con,$sql);
    header('Location: home.php');
}
else if (!mysqli_query($con,$sql))
{
    echo "Not posted successfully";
    echo (mysql_errno);
}

?>
