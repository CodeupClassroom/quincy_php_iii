<?php

function pageController() {
    $favoriteThings = ['coding', 'piano', 'family', 'food', 'friends'];
    $randomThing = $favoriteThings[array_rand($favoriteThings)];

    return [
        'favoriteThings' => $favoriteThings,
        'thingOfTheDay' => $randomThing,
    ];
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

    <title>My Favorite Things</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- Custom CSS -->
    <style type="text/css">

        td {
            text-transform: capitalize;
        }

    </style>

</head>

<body>

    <main class="container">

        <h1 class="text-center">My Favorite Things</h1>

        <h2>Thing of the day: <?= $thingOfTheDay ?></h2>

        <table class="table table-striped">

            <?php foreach($favoriteThings as $fav): ?>
                <tr>
                    <td><?= $fav ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

    </main>

    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
