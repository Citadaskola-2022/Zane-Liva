<?php

declare(strict_types=1);

namespace App\Invoices\Sub;

use App\Notifications\Email;

class Bill
{

    public function __construct($a)
    {
       $customerProfile = new CustomerProfile();

       $email = new Email();

       if (1 == 2) {
       } elseif ($a == 2) {
        }
    }
}