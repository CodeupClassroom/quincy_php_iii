<?php 

	// Function to read list file
	function parseList()
	{
		$fileName = "list.txt";
		$handle = fopen($fileName, 'r');
		$contents = fread($handle, filesize($fileName));
		$listArray = explode("\n", $contents);
		return $listArray;
	}

	// Page controller function
	function pageController()
	{
		$data = [];

		// Verify $_POST has been submitted 
		$cart = (!empty($_POST)) ? $_POST : [];

		// Array of items from the master list
		$data['items'] = parseList();

		// Items added to the list
		$data['cart'] = $cart;

		// Number of items added to the grocery list
		$data['cartCount'] = count($cart);

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
    
    <title>Order Form</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">

    <!-- Custom CSS -->
    <style type="text/css">
    	
    	.refresh {
    		position: fixed;
    	}

    </style>

</head>

<body>

    <main class="container">
        
        <h1>Grocery List Form</h1>

		<!-- Heading to show number of items added to cart -->
		<h3 class="text-center"><?= "$cartCount items in cart" ?></h3>

		<!-- Form to submit items to shopping list page -->
		<form method="POST" action="/shoppingList.php">
			<?php foreach($cart as $key => $item) : ?>
				<input type="hidden" name="<?= $key ?>" value="<?= $item ?>">
			<?php endforeach ?>
			<button class="btn btn-primary center-block <?php if ($cartCount === 0) {echo "hidden";} ?>">View Cart</button>
		</form>

		<!-- Form to add items to the cart -->
        <form method="POST">
				
			<button type="submit" class="btn btn-success center-block">Refresh Cart</button>
			        	
			<?php foreach($items as $key => $groceryItem) : ?>
				<p><input type="checkbox" name="item<?= $key + 1 ?>" value="<?= $groceryItem ?>"> <?= $groceryItem ?></p>
			<?php endforeach ?>

			<button type="submit" class="btn btn-success center-block">Refresh Cart</button>
        </form>

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
