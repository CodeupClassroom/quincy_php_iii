<?php

// isset returns true if and only if the variable is set and not assigned to NULL
function pageController()
{
    $data = [];
    $data['count'] = isset($_GET['count']) ? $_GET['count'] : 0;
    return $data;
}

extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Counter: <?= $count ?></h1>

    <!-- shorthand PHP echo-->
    <a href="?count=<?= $count + 1 ?>">Up</a> 

    <a href="?count=<?= $count - 1 ?>">Down</a>



</body>
</html>