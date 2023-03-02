<?php

declare(strict_types=1);

Namespace App;

class Car
{
    public ?Driver $driver = null;

   private ?int $odometer;
   private string $number_plate;


    public function __construct(
       int $odometrs,
       string $number_plate,
       private float $fuelCosumption,
    )
    {
       $this->odometer = $odometrs;
       $this->number_plate = $number_plate;
   }

   public function addKilometers(int $kilometer): Car
   {
      // $this->odometer = $this->odometer + $kilometer;
       $this->odometer +=$kilometer;

       return $this;
   }

    /**
     * @return float
     */
    public function getFuelConsumption(): float
    {
        return $this->odometer * $this->fuelCosumption / 100;
    }
    public function __destruct()
    {
        echo "Car $this->number_plate Destroyed </br" .PHP_EOL;
    }
}