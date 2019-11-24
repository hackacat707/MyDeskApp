<?php
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
          <li class="nav-item">
           <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
			  <span class="sr-only">(current)</span>
			  </a>
          </li>
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
            <a class="nav-link" href="contact-us.html">Contact Us
            </a>
          </li>
	       <li class="nav-item">
                    <a class="nav-link" href="post.php">Post </a>
                </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
    <div class="container">
    <div class="row">
      <div class="col-lg-12 talign-c mt-5">
		 <form action="search.php"method="POST">
				<input type="text" name ="search" placeholder="Search" id = "SearchBar">
				<button type="submit" name="submit-search" class="SearchBtn" >Search</button>
		</form>
      </div>
    </div>
	<br/>
  </div>
  
  <div class="container">
    <div class="row ">
      <div class="col-lg-12">
        <div class= "contentBox cBoxMore">
			<h6> Filter Results</h6>
			<form action="" class="checkboxes">
				<label>
					<input type="checkbox" name="checkbox" value="checkbox" >
				</label> <label>checkbox</label>
				<label>
					<input type="checkbox" name="checkbox" value="checkbox">
				</label> <label>checkbox</label>
				<label>
					<input type="checkbox" name="checkbox" value="checkbox">
				</label> <label>checkbox</label>
				<label>
					<input type="checkbox" name="checkbox" value="checkbox">
				</label> <label>checkbox</label>
			  <input type="submit" class="FilterBtn" value="Filter" >
			</form>
		</div>
      </div>
    </div>
	<br/>
  </div>
  
  
  <div class="container">
    <div class="row ">
      <div class="col-lg-12">
        <h2 >Results</h2>
      </div>
    </div>
  </div>
  
  
  <div class="container">
		<div class="row">
		 <!-- Boxes with search results  -->
		 <div class="col-lg-12">
			<?php 
				if(isset($_POST['submit-search'])){
					$search = mysqli_real_escape_string($con, $_POST['search']);
					$sql ="SELECT * FROM host_place WHERE title LIKE '%$search%' OR 
					address LIKE '%$search%' OR details LIKE '%$search%'";
					
					$result = mysqli_query($con, $sql);
					$queryResult = mysqli_num_rows($result);
					
					
					if($queryResult>0){
						while($row = mysqli_fetch_assoc($result)){
							$homeId = $row['id'];
							echo '
							<div class="col-sm-4 flLeft">
								<div class = "contentBox" >
									<img src = "images/image.png" class="placeImg" alt="place image"/>
									<h6> Title/Location '.$row["title"]. '</h6>
									<p class= "lineHe prStyling">Price '.$row["price"]. '</p>
									<p class= "lineHe raStyling" >Rating '.$row["rating"]. '</p>
									<p class= "lineHe detStyling fBold"><a href="details.php?varId=' .$homeId.'" target= "blank" class="SRed">Details ></a> </p>
								</div>
							  </div>
							';
							
						}
						
					}else{
						echo "There are no results matching your search";						
					}
					
				}
			
			?>
			  
			  
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
