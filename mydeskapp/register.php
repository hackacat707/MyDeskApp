<?php
// Change this to your connection info.

include_once "databaseConnection.php";
// Try and connect using the info above.

    $username = $_POST['username'];
    $firstN  = $_POST['first'];
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['first'])) {
	// Could not get the data that should have been sent.
	die ('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'] || $_POST['first'])) {
	// One or more values are empty.
	die ('Please complete the registration form');
}

// We need to check if the account with that username exists.
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	die ('Email is not valid!');
}
if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
    die ('Username is not valid!');
}
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	die ('Password must be between 5 and 20 characters long!');
}
if ($stmt = $con->prepare('SELECT usr_id, pass FROM users WHERE uname = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Username doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO users (fname, lname, uname ,pass, email ) VALUES (?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sssss', $_POST['first'], $_POST['last'], $_POST['username'], $password, $_POST['email']);
	$stmt->execute();
	
	$sql = "SELECT * FROM users WHERE uname = ? AND fname = ?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
			echo "SQL could not be prepared ";
			echo mysqli_error($con);
		}
		else 
		{
			mysqli_stmt_bind_param($stmt, "ss" , $username, $firstN);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			
			while ($row = mysqli_fetch_assoc($result))
		{
			$userid = $row['usr_id'];
			$sql = "INSERT INTO imagedb (userid, status) VALUES ('$userid', 1)";
			mysqli_query($con, $sql);
			
		}
			
			}
			
	header('Location: home.php');
	
	
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>
