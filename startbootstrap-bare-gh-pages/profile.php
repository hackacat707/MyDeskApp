<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'id11438325_mydeskapp';
$DATABASE_PASS = '5minecrafts@boxes!';
$DATABASE_NAME = 'id11438325_mydeskapp';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT pass, email FROM users WHERE usr_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
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

    <title>Sign in to MyDesk</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
		     <li class="nav-item">
                    <a class="nav-link" href="post.php">Post</a>
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
				<table>
					<tr>
						<td> Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td> Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
