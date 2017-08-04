<?php

class Test
{
	public function __construct($name)
	{
		echo "Hello; my name is $name!" . PHP_EOL;
	}

	public function __destruct()
	{
		echo "Hello, I'm dead... :(" . PHP_EOL;
	}
}