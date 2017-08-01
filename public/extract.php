<?php
// Demo of extract function 
// internal function to PHP http://php.net/manual/en/function.extract.php

function pageController()
{
    $movie = [
        'genre' => ['animation', 'action', 'comedy'],
        'title' => 'Lion King',
        'release' => '1994'
    ];

    return $movie;
}

// This is what extract(pageController()) is doing:
// $movie = pageController();
// $title = $movie['title'];
// $genre = $movie['genre'];
// $release = $movie['release'];

// we do it with one line:
extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Extract demo</h1>

    <p>Title: <?= $title ?></p>
    <p>Released in: <?= $release ?></p>
    <p>Genre: <?= implode(", ", $genre) ?></p>

</body>
</html>