<?php

namespace App\Models\Pizza\Strategy;

class Context
{
    private $strategy;

    public function __construct(StrategyInterface $strategy) 
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $currentAmount, int $newAmount){
      return $this->strategy->calculateToppings($currentAmount, $newAmount);
   }
}
