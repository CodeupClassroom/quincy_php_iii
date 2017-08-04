<?php

require_once "Log.php";

$log = new Log();

$log->info("User successfully logged in");

$log->error("Github is down. Freak out now.");

$log->logMessage("CATASTROPHIC ERROR", "Everything is down. The system is down.");
