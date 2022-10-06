<?php

declare(strict_types=1);

require_once '../src/Car.php';

$car1Liters = (new Car(1000, 'ab-1234', 14.6))
->addKilometers(500)
->addKilometers(200)
->addKilometers(100)
->getFuelConsumption();



//$car->odometer = 256000;

var_dump($car1Liters);


//require __DIR__ . '/../bootstrap/app.php';
