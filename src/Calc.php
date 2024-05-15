<?php

namespace Sebentleitner\Calculator;

use Sebentleitner\Calculator\ICalculator;

class Calc implements ICalculator
{

    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }

}