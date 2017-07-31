
<?php  


	$header = "PHP with HTML";

	$loggedIn = false;

	$userInfo = [
		'name' => 'Fred',
		'age' => 49,
		'occupation' => 'Rock Star'
	];

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP w/HTML</title>
</head>
<body>

	<h1><?php echo $header; ?></h1>

    <!-- More elaborate output -->

	<h3>
		<?php echo ($loggedIn) ? "Logged in!" : "Not logged in!" ?>
	</h3>

	<h3>User Info</h3>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Occupation</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php foreach($userInfo as $stat) { ?> 
					<td><?php echo $stat ?></td>
				<?php } ?>
			</tr>
		</tbody>
	</table>

</body>
</html>



