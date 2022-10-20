<?php

declare(strict_types=1);

use App\Phone;

spl_autoload_register(function ($class) {
    $class = __DIR__ .'/../'. lcfirst(str_replace('\\', '/', $class)) . '.php';
    require_once $class;
    var_dump($class);

});


$iphone = new Phone(11, 'Apple', 144, 71.4);
$android = new Phone(22, 'Samsung');


$iphone->installApp('Facebook');
$iphone->installApp('Instagram');
$iphone->installApp('Duolingo');

echo implode( '',$iphone->getInstalledApps());

$iphone->turnOnSetting("DND");

//require __DIR__ . '/../bootstrap/app.php';
