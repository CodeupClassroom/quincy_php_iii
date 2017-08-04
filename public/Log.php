<?php

class Log
{
    public $filename;

    public function logMessage($level, $message)
    {
        $this->filename = "log-" . date('Y-m-d') . ".log";

        $handle = fopen($this->filename, 'a');

        $stringToWrite = date("Y-m-d H:i:s") . " [" . $level . "] " . $message . PHP_EOL;

        fwrite($handle, $stringToWrite);

        fclose($handle);
    }   

    public function info($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function error($message)
    {
        $this->logMessage("ERROR", $message);
    }

}