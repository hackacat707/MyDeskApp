<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Team Project</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/AdditionalCSS.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">   
	  
	  <img src="My Desk Logo.png" alt="Logo" style="width:80px;height:80px;"></a>
      	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"></li>
           <li class="nav-item active">
            <a class="nav-link" href="login.html">Home
			  <span class="sr-only">(current)</span>
			  </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="About.html">About Us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="post.php">Rent Your Place </a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="logout.php">Log out</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="FAQ.html">FAQ
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="contact-us.html">Contact Us
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
    <div class="container">
    <div class="row">
      <div class="col-lg-12 talign-c mt-5">
          <label for="SearchBar"></label><input type="text" placeholder="Location" id = "SearchBar">
			<button type="submit" class="SearchBtn" ><a href="search.html" target= "blank" >Search</a></button>
			<h3>Welcome back, <?=$_SESSION['name']?>!</h3>
      </div>
    </div>
	<br/>
  </div>
  
  
  <div class="container">
    <div class="row ">
      <div class="col-lg-12">
        <h2 >Recommended</h2>
      </div>
    </div>
  </div>
  
  
  <div class="container">
	<div class="row">
	 <!-- Boxes with recommended locations -->
	 <div class="col-lg-12">
		<div class="col-sm-4 flLeft">
			<div class = "contentBox" >
				<img src = "#" class="placeImg" alt="place image"/>
				<h6> Title/Location</h6>
				<p class= "lineHe prStyling">Price</p>
				<p class= "lineHe raStyling" >Rating</p>
				<p class= "lineHe detStyling fBold"><a href="details.html" target= "blank" class="SRed">Details ></a> </p>
			</div>
		  </div>
		  <div class="col-sm-4 flLeft">
			<div class = "contentBox" >
                <img src = "#" class="placeImg" alt="place image"/>
				<h6> Title/Location</h6>
				<p class= "lineHe prStyling">Price</p>
				<p class= "lineHe raStyling" >Rating</p>
				<p class= "lineHe detStyling fBold"><a href="details.html" target= "blank" class="SRed">Details ></a> </p>
			</div>
		  </div>
		 <div class="col-sm-4 flLeft">
			<div class = "contentBox" >
                <img src = "#" class="placeImg" alt="place image"/>
				<h6> Title/Location</h6>
				<p class= "lineHe prStyling">Price</p>
				<p class= "lineHe raStyling" >Rating</p>
				<p class= "lineHe detStyling fBold"><a href="details.html" target= "blank" class="SRed">Details ></a> </p>
			</div>
		  </div>
		  <p href = "#" class= "talign-r fBold vMoreStyling"> View More ></p>
		  </div>
		</div>
	</div>

  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 >Newest</h2>
      </div>
	</div>
  </div>
  
  
  <div class="container">
    <div class="row ali">
	  <!-- Boxes with newest locations -->
		<div class="col-lg-12">
		<div class="col-sm-4 flLeft">
			<div class = "contentBox" >
                <img src = "#" class="placeImg" alt="place image"/>
				<h6> Title/Location</h6>
				<p class= "lineHe prStyling">Price</p>
				<p class= "lineHe raStyling" >Rating</p>
				<p class= "lineHe detStyling fBold"><a href="details.html" target= "blank" class="SRed">Details ></a> </p>
			</div>
		  </div>
		  <div class="col-sm-4 flLeft">
			<div class = "contentBox" >
                <img src = "#" class="placeImg" alt="place image"/>
				<h6> Title/Location</h6>
				<p class= "lineHe prStyling">Price</p>
				<p class= "lineHe raStyling" >Rating</p>
				<p class= "lineHe detStyling fBold"><a href="details.html" target= "blank" class="SRed">Details ></a> </p>
			</div>
		  </div>
		 <div class="col-sm-4 flLeft">
			<div class = "contentBox" >
                <img src = "#" class="placeImg" alt="place image"/>
				<h6> Title/Location</h6>
				<p class= "lineHe prStyling">Price</p>
				<p class= "lineHe raStyling" >Rating</p>
				<p class= "lineHe detStyling fBold"><a href="details.html" target= "blank" class="SRed">Details ></a> </p>
			</div>
		  </div>
		  <p href = "#" class= "talign-r fBold vMoreStyling"> View More ></p>
		  </div>
		</div>
	</div>
	
	<div class="container">
    <div class="row">
      <div class="col-lg-12 footerHeight">
        
      </div>
	</div>
  </div>
  
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>