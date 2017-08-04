<?php

require_once "Log.php";

$logger = new Log('cli');

$logger->info("Something happened.");

$logger->error("Something went wrong.");