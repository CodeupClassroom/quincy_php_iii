<?php 

session_start();

require_once 'functions.php';

function pageController()
{
	$data = [];

	// check to see if $_SESSION has a logged_in_user key/value, if so redirect to authorized.php
	if(isset($_SESSION['logged_in_user'])) {
		header("Location: authorized.php");
		die();
	}

	$message = "";
	$username = inputGet('username');
	$password = inputGet('password');

	// user submitted the form
	if (!empty($_POST)) {

		if ($username == "guest" && $password == "password") {
			
			$_SESSION['logged_in_user'] = $username;

			header("Location: authorized.php");
			die();
		} else {
			$message = "Invalid login!";
		}
	}

	$data = [
		"username" => $username,
		"message" => $message
	];

	return $data;
}

extract(pageController());

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="">
	<meta name="Keywords" content="">
    <meta name="author" content="">
	<title>Login</title>

<!-- Latest compiled and minified CSS -->
<link 
rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
crossorigin="anonymous">

<!-- Custom CSS -->
<style></style>
</head>
<body>
	<main class="container">
		<h1>Login to your super secure site!</h1>
		<p><?= $message ?></p>

		<form method="POST">
			<div class="form-group">
		    	<label for="username">Username</label>
		    	<input type="text" name="username" class="form-control" id="username" placeholder="username">
		  	</div>
		  	<div class="form-group">
    			<label for="password">Password</label>
    			<input type="password" name="password" class="form-control" id="password" placeholder="Password">
  			</div>
  			<button type="submit" class="btn btn-default">Login</button>
		</form>

	</main>

<?php include 'footer.php' ?>

	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
	crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>
</body>
</html>
