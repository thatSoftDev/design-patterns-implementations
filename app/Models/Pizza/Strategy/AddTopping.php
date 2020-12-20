<?php

namespace App\Models\Pizza\Strategy;

use App\Models\Pizza\Strategy\StrategyInterface;

class AddTopping implements StrategyInterface
{
    public function calculateToppings(int $currentAmount, int $newAmount) 
    {
        return $currentAmount + $newAmount;
    }
}
