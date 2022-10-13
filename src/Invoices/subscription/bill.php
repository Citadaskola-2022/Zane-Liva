<?php

declare(strict_types=1);

namespace App\invoices\subscription;

class bill
{
public function __construct()
{
    $customerProfile = new \CustomerProfile();

    $email = new \App\Notification\Email();

    var_dump($email);
}
}