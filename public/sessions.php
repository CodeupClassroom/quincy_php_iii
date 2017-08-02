<?php
// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
session_start();

// get the current session ID
$sessionId = session_id();

// initialize a view count variable
$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

// increment the counter
$viewCount++;

// finally, store the new value in the session
$_SESSION['view_count'] = $viewCount;

if(!empty($_GET['logout'])) {
    logout();
    header("Location: sessions.php");
    die();
}

function logout()
{
    session_unset();
    session_regenerate_id(true); 
    session_destroy();
    session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <ul>
        <li>Session ID: <?= $sessionId; ?></li>
        <li>View Count: <?= $viewCount; ?></li>
    </ul>

    <form method="GET">
        <button name="logout" value="yes">Logout</button>
    </form>
</body>
</html>