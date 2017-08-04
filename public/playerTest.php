<?php 

require_once "Player.php";

function pageController()
{
	$data = [];

	$player1 = new Player("johnny99", "32", "johnny@howdy.com", date('m-d-Y'));
	$player2 = new Player("fred1232", "14", "fred@howdy.com", date('m-d-Y'));
	$player3 = new Player("yomamma88", "45", "dutch@howdy.com", date('m-d-Y'));
	$player4 = new Player("xoxo33", "23", "cathy@howdy.com", date('m-d-Y'));
	$player5 = new Player("travis1", "12", "trex@howdy.com", date('m-d-Y'));
	$player6 = new Player("grubdub", "18", "kyle@howdy.com", date('m-d-Y'));

	$players = [$player1, $player2, $player3, $player4, $player5, $player6];

	$data = [

		'players' => $players

	];

	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Constructors and Destructors</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">

</head>

<body>

    <main class="container">
        
		<h1>Constructors and Destructors</h1>

		<table class="table table bordered">
			<thead>
				<tr>
					<th>Username</th>
					<th>Age</th>
					<th>Email</th>
					<th>Joined</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($players as $player) : ?>
					<tr>
						<td><?= $player->username ?></td>
						<td><?= $player->age ?></td>
						<td><?= $player->email ?></td>
						<td><?= $player->date_joined ?></td>
					</tr>
				<?php endforeach; ?>	
			</tbody>
		</table>

		

    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
    crossorigin="anonymous"></script>

</body>

</html>
