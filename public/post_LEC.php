<?php 
	var_dump($_POST);

	function pageController()
	{
		$data = [];
		$nickname = (isset($_POST['nickname'])) ? $_POST['nickname'] : "undefined";
		$data['nickname'] = $nickname;

		if ($nickname == "Justin") {
			header("Location:http://www.cornify.com");
			die();
		}

		return $data;
	}

	extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nickname</title>
</head>
<body>

	<h1>Nickname is <?= $nickname ?></h1>

	<form method="POST">

		<label for="nickname">Nickname</label>	
		<input type="text" name="nickname" id="nickname">
		<button type="submit">Submit</button>

	</form>

</body>
</html>