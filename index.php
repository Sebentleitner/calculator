<?php

use Sebentleitner\Calculator\Calc;

require 'vendor/autoload.php';


$logger = new EchoLogger();

$c = new Calc($logger);

$result = $c ->sum(12,5);

