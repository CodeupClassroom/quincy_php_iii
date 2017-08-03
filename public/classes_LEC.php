<?php

require_once "Person.php";
require_once "Dog.php";

/*  ==================================== INTRO ==================================== 

 	PHP code can be organized into groups of functions (like JS), classes and objects, or a mixture of both.

 	Advantages of an object-oriented approuch to writing code...

 	    1) Code reuse
 	    2) Greater code organization
 	    3) Easier to modify over time

	Important vocab...

 	       Object - a collection of code that may contain state (properties) and behavior (methods)
 	     Property - a variable that is defined on an object or class for an object (the nouns of an object)
 	       Method - a function that is defined in a class and accessible through an object (the verbs of an object)
 	        Class - a blueprint (structure) for an object
 	Instantiation - creating an object by making a specific instance of a class
 	        $this - when declared in a class "$this" is a keyword that represents the current instance of an object.

*/


//  ==================================== KEY CONCEPTS ==================================== 


 	/* Topics Covered in This Lesson
	
		1) PHP vs. JS Objects
		2) Use of PHP stdClass()
		3) Classes, Properties, and Methods
		4) Naming Conventions of Classes
		5) public Keyword
		6) $this Keyword

 	*/

 	// ------------- JavaScript / PHP Objects Comparison


 	/*

		The JS way of creating an object...
	
		var person = new Object();
		person.firstName = 'Johnny';
		person.lastName  = 'Appleseed';
		person.fruit     = ['Granny Smith', 'McIntosh', 'Red Delicious'];

 	*/

	// PHP Way

		$person = new stdClass();
		
		$person->firstName = 'Johnny';
		$person->lastName  = 'Appleseed';
		$person->fruit     = ['Granny Smith', 'McIntosh', 'Red Delicious'];

		// var_dump($person);
	



	// CANNOT ADD FUNCTIONS/METHODS THIS WAY!!!
 	
 	// ------------- Classes
 	
	// Person Class Example

		$somePerson = new Person();

		$somePerson->firstName = "Justin";
		$somePerson->lastName = "Reich";
		$somePerson->numOfLives = 30;

		// $somePerson->sayHello();


	// Dog Class Example

		$dog = new Dog();

		$dog->name = "Spot";
		$dog->breed = "Pug";
		$dog->age = 4;
		$dog->isHouseTrained = true;

		// $dog->bark("WOOF!!");

		echo $dog->getAge() . PHP_EOL;

		$dog->getOlder();


		// $dog->barkAtSomething($dog->breed);


 	// ------------- Naming Conventions of Classes

		// Use uppercase names for classes and class file names
		// Class file names should always match class names


 	// ------------- $this

		// Dog Example - add callDog() and getOlder()
		// Operation Example


 	// ------------- public keyword

		// use it

	
	//  ------------- "Real World"

		// User Example
































