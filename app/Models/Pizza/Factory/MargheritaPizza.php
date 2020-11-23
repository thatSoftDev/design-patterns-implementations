<?php

namespace App\Models\Pizza\Factory;

use App\Models\Pizza\Factory\PizzaInterface;
use App\Models\Pizza\Pizza;

class MargheritaPizza extends Pizza implements PizzaInterface
{
    public function cookPizza(): void
    {
        echo "Margherita Pizza";
    }
}