<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
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
	  
	  <img src="MyDeskLogo.png" alt="Logo" style="width:80px;height:80px;"></a>
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
                    <a class="nav-link" href="post.html">Post
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
            <form action="postSend.php" method="post" enctype='multipart/form-data'>
                <input type = 'file' name = 'file' >
                <div class="form-group">
                    <label for="title"><i class="title"></i></label>
					<input type="text" name="title" placeholder="Name: " id="title" required>
                </div>
                <div class="form-group">
                    <label for="address"><i class="title"></i></label>
                    <input type="text" name = "address" id="address" placeholder= "Location" required>
                </div>
                <div class="form-group">
                    <label for="price"><i class="price"></i></label>
                    <input type="text" name = "price" id="price" placeholder= "Rent: " required>
                </div>
                <div class="form-group">
                    <label for="rating"><i class="rating"></i></label>
                    <input type="number" name = "rating" id="rating" placeholder= "Rating" required>
                </div>
                <div class="form-group">
                    <label for="details"><i class="details"></i></label>
                    <input type="text" id="details" name = "details" placeholder= "Details" required>
                </div>
                <div class="form-group">
                    <label for="phoneNo"><i class="phoneNo"></i></label>
                    <input type ="number" id="phoneNo" name = "phoneNo" placeholder= "Phone number:" required>
                </div>
                <div class="form-group">
                    <label for="email"><i class="email"></i></label>
                    <input type="text" id="email" name = "email" placeholder= "Email address:">
                </div>
                <button class="btn btn-default" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
