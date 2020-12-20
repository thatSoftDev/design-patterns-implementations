<?php

namespace App\Models\Pizza\Strategy;

interface StrategyInterface
{
    public function calculateToppings(int $currentAmount, int $newAmount);
}
