<?php

namespace Sebentleitner\Calculator;

use Sebentleitner\Calculator\ICalculator;
use Sebentleitner\Logger\ILogger;


class Calc implements ICalculator
{

    private ILogger $logger;

    function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }


    public function sum(int $a, int $b): int{

        $result = $a + $b;
        $this->logger->logEntry('result of ' . $a . '+' . $b. '=' . $result);
        return $result;

    }


}