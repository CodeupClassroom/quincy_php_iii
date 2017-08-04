<?php

require_once 'Operation.php';
require_once 'Dog.php';

// ====== Operation Example

// access a static property value

// echo Operation::$roundedPiValue . PHP_EOL;


// call a static method
// echo Operation::addArgs(2, 1) . PHP_EOL;






// ====== Operation Example

// access static property on Dog class 
// echo Dog::$numOfBreeds;

// access static method
// Dog::blowDogWistle();


// check value of dogsBred after completing constructor to increment dogsBred
echo Dog::$dogsBred . PHP_EOL;

$fido = new Dog();

echo Dog::$dogsBred . PHP_EOL;




