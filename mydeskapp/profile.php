<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
}
include_once 'databaseConnection.php';
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT pass, email, fname, lname FROM users WHERE usr_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $firstN, $lastN);
$stmt->fetch();
$stmt->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <title>My Profile</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html">About Us</a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="profile.php">Profile
					<span class="sr-only">(current)</span>
					</a>
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
            <h1 class="mt-5">Profile</h1>
            <p class="lead">Your account details are below:</p>
            <?php 
            $sql = "SELECT * FROM users";
	$result = mysqli_query($con, $sql);
	if ($result = mysqli_query($con, $sql))
	{
		while ($row = mysqli_fetch_assoc($result))
		{
				$id = $row['usr_id'];
				$sqlImg = "SELECT * FROM imagedb WHERE userid='$id'";
				$resultImg = mysqli_query($con, $sqlImg);
				while ($rowImg = mysqli_fetch_assoc($resultImg))
				{
					echo "<div class = 'user-container'>";
					if ($rowImg['status']== 0)
					{
						echo "<img src = 'images/profile".$id.".jpg?'".mt_rand().">";
					}
					else 
					{
						echo "<img src = 'images/profiledefault.jpg'>";
					}
					//echo "<p>".$row['username']."</p>";
					echo "</div>";
				}
		}
	} 
	else 
	{
		echo mysqli_error($con);
	}
            ?>
				<table>
					<tr>
						<td> Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td> Email:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td>First name: </td>
						<td><?=$firstN?></td>
					</tr>
					<tr>
						<td>Last name: </td>
						<td><?=$lastN?></td>
					</tr>
				</table>
				<form action='uploadProfile.php' method='POST' enctype='multipart/form-data'>
			  <input type = 'file' name = 'file' >
			  <button type = 'submit' name= 'submit'>Upload your file</button>
		</form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
