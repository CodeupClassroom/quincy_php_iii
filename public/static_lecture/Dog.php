<?php

class Dog
{
	public $name;
	public $breed;
	public $age;

	// add static property for number of dogs in the world
	public static $millionsOfDogsInTheWorld = 600;

	// add static property for number of breeds
	public static $numOfBreeds = 339;

	// add static property affected by static method dogsBred
	public static $dogsBred = 0;

	// Add constructor to increase static property value
	public function __construct()
	{
		self::$dogsBred += 1;
	}


	public function bark($bark)
	{
		echo $bark;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function barkAtSomething($something)
	{
		echo "The dog barks at a $something";
	}

	public function getOlder()
	{
		$this->age += 1;
	}
 
 	// Add static method
 	public static function blowDogWistle()
 	{
 		echo "PSSSFFFTTTTT!!!";
 	}

}









