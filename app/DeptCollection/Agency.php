<?php

namespace App\DeptCollection;

class Agency implements Collector
{
     public function collect(int $owendAmount) : float
     {
         $guaranteed = $owendAmount * 0.5;

         return mt_rand($guaranteed, $owendAmount);
     }
}