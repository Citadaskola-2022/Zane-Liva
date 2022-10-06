<?php

declare(strict_types=1);

class Car
{
   private ?int $odometer;
   private string $number_plate;

   private float $fuelConsumption;

    public function __construct(
       int $odometrs,
       string $number_plate,
       float $fuelCosumption
   )
   {
       $this->odometer = $odometrs;
       $this->number_plate = $number_plate;
       $this->fuelConsumption = $fuelCosumption;
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
        return $this->odometer * $this->fuelConsumption / 100;
    }
    public function __destruct()
    {
        echo "Car $this->number_plate Destroyed </br" .PHP_EOL;
    }
}