<?php

use Sebentleitner\Calculator\Calc;
use Sebentleitner\Logger\EchoLogger;
use Sebentleitner\Logger\FileLogger;

require 'vendor/autoload.php';


//$logger = new EchoLogger();

//$logger = new FileLogger('results.log');



$c = new Calc($logger);

$result = $c ->sum(12,5);

