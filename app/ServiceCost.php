<?php

namespace App;

class ServiceCost
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process(): void
    {
        echo "Total amount is {$this->amount} for the service";
    }

}