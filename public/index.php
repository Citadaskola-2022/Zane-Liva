<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $class = __DIR__ .'/../'. lcfirst(str_replace('\\', '/', $class)) . '.php';
    require_once $class;
    var_dump($class);

});

$subBill = new \App\Invoices\Sub\Bill();

var_dump($subBill);

//require __DIR__ . '/../bootstrap/app.php';
