<?php 

require_once "Operation.php";

$oper = new Operation();

$oper->num1 = 2;
$oper->num2 = 3;

$oper->addNums();


echo $oper->getCurrentOutput();

