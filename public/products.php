<?php

$products = [
    ['name' => 'Drip Coffee', 'price' => 1.99, 'quantity' => 3],
    ['name' => 'Espresso', 'price' => 2.99, 'quantity' => 1],
    ['name' => 'Iced Tea', 'price' => 1.49, 'quantity' => 5],
    ['name' => 'Bottled Water', 'price' => 2.49, 'quantity' => 0],
];

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
