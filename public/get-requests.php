<?php

function pageController() {

    $search = isset($_GET['search']) ? $_GET['search'] : 'No search term provided';

    // query the database to get search results
    $results = ['one', 'two', 'three'];

    return [
        'searchResults' => $results,
        'searchTerm' => $search,
        'predefinedSearchTerms' => ['puppies', 'kittens', 'baby koalas'],
    ];
}

extract(pageController());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php foreach($predefinedSearchTerms as $term): ?>
        <a href="/get-requests.php?search=<?= urlencode($term) ?>">search for <?= $term ?></a>
    <?php endforeach; ?>

    <form>
        <label> Search:
            <input type="text" name="search" />
        </label>
        <select name="sort">
            <option selected disabled required>Sort</option>
            <option>best</option>
            <option>popular</option>
            <option>price</option>
        </select>
        <input type="submit" />
    </form>

    <h2>Results for <?= $searchTerm ?></h2>

    <?php foreach($searchResults as $result): ?>
        <h4><?= $result ?></h4>
    <?php endforeach; ?>

</body>
</html>
