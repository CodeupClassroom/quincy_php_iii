<?php 

class Player {

	public $username;
	public $age;
	public $email;
	public $date_joined;

	public function __construct($username, $age, $email, $date_joined) 
	{

		$this->username = $username;
		$this->age = $age;
		$this->email = $email;
		$this->date_joined = $date_joined;

	}

	public function __destruct() 
	{
		echo $this->username . " destroyed!" . PHP_EOL;
	}

}