<?php

    $adjectives = ['protective','old-fashioned','lethal','resonant','observant','illustrious','quixotic','sable','rightful','grandiose','unsuitable','vivacious'];
    $nouns = ['detail','account','tendency','instrument','industry','water','chance','question','step','rice'];

    function randomArrayElement($array)
    {
        return $array[rand(0, count($array) - 1)];
    }

    function randomServerName($arr1, $arr2)
    {
        return randomArrayElement($arr1) . " " . randomArrayElement($arr2);
    }

    $serverName = randomServerName($adjectives, $nouns);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Server Name Generator</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style type="text/css">

        h1 {
            text-transform: capitalize;
        }

    </style>

</head>

<body>

    <main class="container">

        <h1><?= $serverName ?></h1>

        <?php for($i = 0; $i < 10; $i += 1) { ?>
            inside of the loop
            <?= "\n\n\n\n\n\n\n\n\n\n\n\n" ?>
        <?php } ?>

    </main>

    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
