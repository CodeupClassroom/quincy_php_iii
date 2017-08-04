<?php

class Dog
{
	public $name;
	public $breed;
	public $age;

	public function __construct($age, $name="rex", $breed="Lab")
	{
		$this->age = $age;
		$this->name = $name;
		$this->breed = $breed;
	}

	public function bark($bark)
	{
		echo $bark;
	}
 

}









