<?php
$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['pwd'])){
 $error = "Username or Password is empty";
 }
 else
 {

 $user=$_POST['email'];
 $pass=$_POST['pwd'];
	 
$enc = base64_encode ($pass);

 $conn = mysqli_connect("localhost", "id11438325_mydeskapp", "5minecrafts@boxes!");

 $db = mysqli_select_db($conn, "id11438325_mydeskapp");

 $query = mysqli_query($conn, "SELECT * FROM users WHERE pass='$enc' AND email='$user'");
 if(mysqli_num_rows($query) == 1){
     
 header("Location: index.html"); }
 else
 {
 $error = "Invalid credentials, please try again";
 }
 mysqli_close($conn); 
 }
}
 
 