<?php 
$server = "localhost";
$user = "id11438325_mydeskapp";
$pass = "5minecrafts@boxes!";
$dbname = "id11438325_mydeskapp";
   
   $conn = new mysqli($server, $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   //echo "Connected successfully <br> <br>";
   


	if(isset($_POST['submit']))
	{
		$password= $_POST["pwd"];
$enc = base64_encode ($password);


		$sql = "INSERT INTO users ( email, pass)
		VALUES ('".$_POST["email"]."','".$enc."')";

		$result = mysqli_query($conn,$sql);
	}

	
	//if(isset($_POST['home'])){
	//header("Location: index.html");

	$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <title>Sign up for MyDesk</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">   
	  
	  <img src="My Desk Logo.png" alt="Logo" style="width:80px;height:80px;"></a>
        <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="newRegister.php">Sign Up
					 <span class="sr-only">(current)</span>
					</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="newLogin.php">Sign In</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="FAQ.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Sign up for MyDesk</h1>
            <p class="lead">Sign up to see more places and host your own place</p>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" id="name" type="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input class="form-control" id="email" type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" id="pwd" type="password" name="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button class="btn btn-default" type="submit" name="submit" method="post">Submit</button>
	            <button class="btn btn-default" type="submit" name="home">back to home page</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
