<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
}

include_once 'databaseConnection.php';

?> 
<style>
<?php 
include "vendor/bootstrap/css/bootstrap.min.css";
include "vendor/bootstrap/css/AdditionalCSS.css";
?>
</style>

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
	  
	  <img src="MyDeskLogo.png" alt="Logo" style="width:80px;height:80px;"></a>
      	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> </li>
           <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
			  <span class="sr-only">(current)</span>
			  </a>
        </li>

            <li class="nav-item">
            <a class="nav-link " href="About.html">About Us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="register.html">Sign Up</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="login.html">Sign In</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="FAQ.html">FAQ
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="contact-us.html">Contact Us</a>
          </li>
			   <li class="nav-item">
                    <a class="nav-link" href="post.php">Post </a>
               </li>

        </ul>
      </div>
    </div>
  </nav>

  
  
  <?php
  $Id = $_GET['varId'];
$sql = "SELECT * FROM host_place where id='$Id';";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows ($result)>0){
	while ($row = mysqli_fetch_assoc($result)){
		echo '
<div class="container">
    <div class="row ">
      <div class="col-lg-12 mt-5">
	  <div class="col-sm-8 flLeft"> 
        <h2 >Title: ' .$row['title']. '</h2>
		<p> Address:' .$row['address']. '</p>
		<p> Contact the Host: '.$row['phone_no']. '<br>' .$row['email'].'</p>
		<p> Price: ' .$row['price'].  '</p>
		<p> Description:  '.$row['details']. '</p>
		<p> Rating: ' .$row['rating']. '</p>
		
		<button type="submit" class="SearchBtn flRight" >Reserve</button>
		</div>
		<div class="col-sm-4 flLeft"> 
			<div class="rowy">
			  <div class="columny">
				<img src ="images/image.png" class="placeImgSmall2" alt="big image" onclick="myFunction(this);"/>
			  </div>
			  <div class="columny">
				<img src ="images/image.png" class="placeImgSmall2" alt="big image" onclick="myFunction(this);"/>
			  </div>
			  <div class="columny">
				<img src ="images/image.png" class="placeImgSmall2" alt="big image" onclick="myFunction(this);"/>
			  </div>
			  <div class="columny">
				<img src ="images/image.png" class="placeImgSmall2" alt="big image" onclick="myFunction(this);"/>
			  </div>
			</div>

			<!-- The expanding image container -->
			<div class="containery">
			  <!-- Expanded image -->
			  <img id="expandedImg" style="width:100%">

			  <!-- Image text -->
			  <div id="imgtext"></div>
			</div>
		</div>
      </div>
    </div>
  </div>';
	}
}

  ?>
  
  
 
	<div class="container">
    <div class="row">
      <div class="col-lg-12 footerHeight">
        
      </div>
	</div>
  </div>
  
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
	function myFunction(imgs) {
	  // Get the expanded image
	  var expandImg = document.getElementById("expandedImg");
	  // Get the image text
	  var imgText = document.getElementById("imgtext");
	  // Use the same src in the expanded image as the image being clicked on from the grid
	  expandImg.src = imgs.src;
	  // Use the value of the alt attribute of the clickable image as text inside the expanded image
	  imgText.innerHTML = imgs.alt;
	  // Show the container element (hidden with CSS)
	  expandImg.parentElement.style.display = "block";
	}
</script>

</body>

</html>
