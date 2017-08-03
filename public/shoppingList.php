
<?php 

	function pageController()
	{
		$data = [];
		$data['cart'] = (!empty($_POST)) ? $_POST : [];
		return $data;
	}

	extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 
    
    <title>Shopping Cart</title>
    
    <!-- Bootstrap CSS -->
    <link 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="===PATH HERE===">

</head>

<body>

    <main class="container">
        
        <h1>Shopping List</h1>
	
		<?php if (!empty($cart)) : ?>

			<ul>

				<?php foreach($cart as $item) : ?>
					<li><?= $item ?></li>
				<?php endforeach ?>	
			
			</ul>

		<?php else : ?>

			<h3>Cart is empty</h3>

		<?php endif ?>

    </main>
    
    <!-- jQuery Version 2.2.4 -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
    crossorigin="anonymous"></script>

    <!-- Custom JS -->

    <script src="===PATH HERE==="></script>

</body>

</html>
