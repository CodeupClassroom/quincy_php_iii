<?php

// pageController() function
// -- a function that encapsulates the logic you need to do on a page
// -- we'll define this
// extract() function
// -- accepts an associative array whose keys will be turned into variables
// -- built in to php

// our pageController function can return an associative array, which we will
// then pass to `extract()` to clearly define the boundary between our logic and
// our presentation

function pageController() {
    $products = [];

    $coffee = ['name' => 'Drip Coffee', 'price' => 1.99, 'quantity' => 3];
    $products[] = $coffee; // same as array_push($products, $coffee)

    $espresso = ['name' => 'Espresso', 'price' => 2.99, 'quantity' => 1];
    $products[] = $espresso;

    $tea = ['name' => 'Iced Tea', 'price' => 1.49, 'quantity' => 5];
    $products[] = $tea;

    $bottledWater = ['name' => 'Bottled Water', 'price' => 2.49, 'quantity' => 0];
    $products[] = $bottledWater;

    return [
        'products' => $products,
        'heading' => 'It\'s the fall sale!',
    ];

    // instead of returning the array literal above, you could also do:
    // $data = [];
    // $data['products'] = $products;
    // $data['heading'] = 'It\'s the fall sale!';

    // return $data;

}

/* $products = pageController()['products']; */
/* $heading = pageController()['heading']; */
// same as

extract(pageController());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
</head>
<body>

    <div class="container">
        <h1 class="text-center"><?= $heading ?></h1>
        <div class="row">
            <?php foreach($products as $product): ?>
                <div class="col-md-6">
                    <h2 class="text-center"><?= $product['name'] ?></h2>
                    <?php if($product['quantity'] > 1): ?>
                        <p>$<?= $product['price'] ?></p>
                    <?php elseif($product['quantity'] == 1): ?>
                        <p class="alert alert-warning">Only one left!</p>
                        <p>$<?= $product['price'] ?></p>
                    <?php else: ?>
                        <p>All sold out!</p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
