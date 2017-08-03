<?php

class Dog
{
	public $name;
	public $breed;
	public $age;
	public $isHouseTrained;

	public function bark($bark)
	{
		echo $bark;
	}

	public function getAge()
	{
		// $this refers to the object
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
 
}









