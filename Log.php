<?php

class Log {

	public $filename;
	public $handle;

	public function __construct($prefix = 'log')
	{
		$this->filename = $prefix . "-" . date('Y-m-d') . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($level, $message) {
		
		$timestamp = date("Y-m-d H:i:s");
		$logEntry = PHP_EOL . "$timestamp - $level - $message";
		fwrite($this->handle, $logEntry);

	}

	public function info($message) {
		$this->logMessage("INFO", $message);
	} 

	public function error($message) {
		$this->logMessage("ERROR", $message);
	}

	public function __destruct()
	{
		fclose($this->handle);
	}


}