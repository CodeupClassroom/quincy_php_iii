<?php

class Operation
{

	public $num1;
	public $num2;
	public $currentOutput;
	public $operationHistory = [];

	// add static property
	public static $roundedPiValue = 3.14;

	public function addNums()
	{
		array_push($this->operationHistory, "add");
		$this->currentOutput = ($this->num1 + $this->num2);
	}

	public function getCurrentOutput()
	{
		return $this->currentOutput;
	}

	// add static function
	public static function addArgs($firstNumber, $secondNumber)
	{
		return $firstNumber + $secondNumber;
	}

}






