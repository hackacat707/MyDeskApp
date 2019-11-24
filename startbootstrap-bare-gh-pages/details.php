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
            <a class="nav-link" href="index.html">Home
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
			<div class = "" >
				<img src ="images/image.png" class="placeImgBig" alt="big image"/>
				<img src = "images/image.png" class="placeImgSmall" alt="small image"/>
				<img src = "images/image.png" class="placeImgSmall" alt="small image"/>
				<img src = "images/image.png" class="placeImgSmall" alt="small image"/>
				
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

</body>

</html>
