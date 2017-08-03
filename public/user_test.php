<?php

// calling code or procedural code

require_once "User.php";
require_once "functions.php";

$message = "";

// if the user submitted the form
if(inputHas("username") && inputHas("password") && inputHas("email")) {

    $user = new User();
    $user->username = inputGet('username');
    $user->email = inputGet('email');
    $user->password = inputGet('password');

    $user->login();
}

if(isset($user) && $user->isLoggedIn) {
    $message = "Welcome home, $user->username!"; 
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1><?= $message ?></h1>

    <h2>Create a new user</h2>    
    <form method="POST" action="#">
        <input type="text" name="username" placeholder="Input your username">
        <input type="password" name="password" placeholder="Input your password">

        <input type="text" name="email" placeholder="your email address">

        <button type="submit">Register</button>
    </form>
</body>
</html>