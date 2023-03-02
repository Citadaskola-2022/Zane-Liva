<?php

namespace App\Cafe;

class CoffeeWithMilk extends Coffee
{
    protected int $volume = 250;

    public function  __construct()
    {
        parent::__construct();
        $this->volume = 250;

    }

    public function brew(): void
    {
        foreach ($this->portion as $i => $portion) {
            echo sprintf('%d: adding %dml portion to coffee with milk' . PHP_EOL , $i + 1,$portion);
        }
    }

    public function addMilk()
    {
        $this->portion['milk'] = 100;
    }
}