<?php

namespace App\Calculator;

class Calculator
{
    private int $acc;

    public function __construct()
    {
        $this->acc = 0;
    }

    public function add(int $a)
    {
        $this->acc += $a;

        return $this;
    }

    public function result()
    {
        return $this->acc;
    }
}
