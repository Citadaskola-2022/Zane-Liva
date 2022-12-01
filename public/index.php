<?php

declare(strict_types=1);


use Ramsey\Uuid\Uuid;
require __DIR__ . '/../bootstrap/app.php';

$transaction = new \App\ServiceCost(111);
//$transaction->process();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ .'/../');
$dotenv->load();

var_dump($_ENV['B_USER'] ?? '');
var_dump($_ENV['B_PASSWORD'] ?? '');

$inflector = \Doctrine\Inflector\InflectorFactory::create()->build();

$name = 'apple';
printf(
    'vienskaitlis: %s, daudzskaitlis %s',
    $name, $inflector->pluralize($name)
);
echo '<br>';

$blogPost = 'This Is MY 4w350m3 Blog post';
printf(
    'title: %s, url: %s',
    $blogPost, $inflector->urlize($blogPost)
);


$uuid = Uuid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);
