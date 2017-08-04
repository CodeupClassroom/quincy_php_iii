<?php

require_once "CanOfSoda.php";

$favSoda = new CanOfSoda();
$favSoda->brandName = "Dr. Pepper";
$favSoda->expirationDate = "08/04/2017";

var_dump($favSoda);

$favSoda->openSoda();
$favSoda->pourOut();

var_dump($favSoda);

