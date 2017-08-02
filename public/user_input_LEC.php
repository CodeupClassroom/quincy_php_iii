<?php

    function filterInput($string)
    {
        return htmlspecialchars(strip_tags($string));
    }

    function pageController()
    {
        $data = [];

        $items = ['Item One', 'Item Two', 'Item Three'];
        
        $userItem = (isset($_POST['newitem'])) ? $_POST['newitem'] : "";


        if ($userItem !== "") {
            array_push($items, filterInput($userItem));
        }
        
        $data['allItems'] = $items;

        return $data;
    }

    extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Input</title>
</head>
<body>

    <h1>List of Items</h1>
    <h1><?= '<em>Test</em>' ?></h1>
    <h1><?= strip_tags('<em><strong>Test</strong></em>') ?></h1>
    <h1><?= htmlspecialchars('<em>Test</em>') ?></h1>
    <h1><?= htmlentities('<em>Test</em>') ?></h1>
    <h1><?= htmlspecialchars('α β γ δ ε') ?></h1>
    <h1><?= htmlentities('α β γ δ ε') ?></h1>

    <ul>
        <?php foreach ($allItems as $item): ?>
            <li><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>

    <form method="POST">
        <input type="text" id="newitem" name="newitem" placeholder="Add new todo item">
        <input type="submit" value="add">
    </form>

</body>
</html>