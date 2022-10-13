<?php

declare(strict_types=1);

namespace App\Invoices\Sub;

class Bill
{
public function __construct()
{
    $customerProfile = new \App\invoices\Sub\CustomerProfile();

    $email = new \App\Notifications\Email();

    var_dump($email);
}
}