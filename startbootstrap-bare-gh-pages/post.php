<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit();
}

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $rent = $_POST['rent'];
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <title>Post Your Place</title>

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
                    <a class="nav-link" href="register.html">Sign Up </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Sign In</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="FAQ.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">Contact Us</a>
                </li>
		     <li class="nav-item">
                    <a class="nav-link" href="post.php">Post
		<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Post Your Own Place</h1>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" id="name" type="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input class="form-control" id="email" type="email">
                </div>
				 <div class="form-group">
                    <label for="location">Location:</label>
                    <input class="form-control" id="location" type="name">
                </div>
				 <div class="form-group">
                    <label for="description">Description of the place</label>
                    <input class="form-control" id="description" type="name">
                </div>
				<div class="form-group">
                    <label for="rent">Rent</label>
                    <input class="form-control" id="rent" type="name">
                </div>
				
                <button class="btn btn-default" formaction="index.html" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
