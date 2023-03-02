<?php

namespace App\DeptCollection;

class Rocky implements Collector
{
     public function getMoney(int $owendAmount) : float
     {
         return 0.65;
     }
}