<?php

class Operation
{

	public $num1;
	public $num2;
	public $currentOutput;
	public $operationHistory = [];

	public function addNums()
	{
		array_push($this->operationHistory, "add");
		$this->currentOutput = ($this->num1 + $this->num2);
	}

	public function subtractNums()
	{
		array_push($this->operationHistory, "subtract");
		$this->currentOutput = ($this->num1 - $this->num2);
	}

	public function multiplyNums()
	{
		array_push($this->operationHistory, "multiply");
		$this->currentOutput = ($this->num1 * $this->num2);
	}

	public function divideNums()
	{
		array_push($this->operationHistory, "divide");
		$this->currentOutput = ($this->num1 / $this->num2);
	}

	public function addArgs($firstNumber, $secondNumber)
	{
		return ($firstNumber + $secondNumber);
	}

	public function getCurrentOutput()
	{
		return $this->currentOutput;
	}

}