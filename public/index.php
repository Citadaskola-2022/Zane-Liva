<?php

declare(strict_types=1);

use App\ServiceCost;

spl_autoload_register(function ($class) {
    $class = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    require_once $class;
    var_dump($class);

});

$transaction = new ServiceCost(50);

//$transaction->amount = 200;

var_dump($transaction->getAmount());

$transaction->process();

