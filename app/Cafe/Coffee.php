<?php

namespace App\Cafe;

class Coffee
{
    protected int $volume;
    public array $portion;

    public function  __construct()
    {
        $this->volume = 100;
        $this->portion = [];
    }

    public function prepare(int $volume): void
    {
        $this->portion[] = $volume;

        if (array_sum($this->portion) > $this->volume){
            array_pop($this->portions);
        }
    }

    public function brew(): void
    {
        foreach ($this->portion as $i => $portion) {
            echo sprintf('%d: adding %dml portion to coffee' . PHP_EOL , $i + 1,$portion);
        }
    }

}