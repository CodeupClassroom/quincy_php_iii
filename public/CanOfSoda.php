<?php

class CanOfSoda
{

	public $brandName;
	public $isFull = true;
	public $isOpen = false;
	public $expirationDate;

	public function openSoda()
	{
		if (!$this->isOpen) {
			$this->isOpen = true;
		} else {
			echo "Can is already open!" . PHP_EOL;
		}
	}

	public function pourOut()
	{
		if ($this->isFull) {
			$this->isFull = false;
		} else {
			echo "The can is already empty!" . PHP_EOL;
		}
	}

}