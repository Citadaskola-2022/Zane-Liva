<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

$transaction = new \App\ServiceCost(111);
$transaction->process();

