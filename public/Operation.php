<?php

class Operation
{

	public $num1;
	public $num2;
	public $currentOutput;
	public $operationHistory = [];


	public function __construct($num1 = 2, $num2 = 2)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

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

	public function getCurrentOutput()
	{
		return $this->currentOutput;
	}

}