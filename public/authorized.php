<?php  
session_start();

require_once "functions.php";
require_once "../Auth.php";

function pageController()
{
	$data = [];

	// check to see if user is logged in. if not, get'm back to the login.php page
	if(!Auth::check()) {
		header("Location: login.php");
		die();
	}

	$data['username'] = Auth::user();
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
	<title>Authorized!</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
	crossorigin="anonymous">

</head>
<body>
	<main class="container">
		<h1>Authorized!</h1>
		<!-- escape username -->
		<h2>Welcome, <?= escape($username) ?></h2>

		<a href="logout.php">Click here to logout securely :D</a>
	</main>

<?php include 'footer.php' ?>


	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script 
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
	crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>

</body>
</html>
