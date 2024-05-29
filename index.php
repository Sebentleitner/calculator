<?php

use Sebentleitner\Calculator\Calc;
use Sebentleitner\Logger\EchoFileLogger;
use Sebentleitner\Logger\EchoLogger;
use Sebentleitner\Logger\FileLogger;

require 'vendor/autoload.php';


$logger1 = new EchoLogger();

$logger2 = new FileLogger('results.log');

$logger = new EchoFileLogger();
$logger->addLogger($logger1);
$logger->addLogger($logger2);

$c = new Calc($logger);

$result = $c ->sum(12,5);

