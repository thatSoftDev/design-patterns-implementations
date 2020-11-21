<?php

namespace App\Models\Pizza\Builder;

use App\Models\Pizza\Pizza;
use App\Models\Pizza\PizzaInterface;

class MargheritaPizzaBuilder implements PizzaBuilderInterface
{
    private Pizza $pizza;

    function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }

    public function makeDough(): void
    {
        $this->pizza->setDough('cross');
    }

    public function addSauce(): void
    {
        $this->pizza->setSauce('tomato');
    }

    public function addTopping(): void
    {
        $this->pizza->setTopping('cheese');
    }

    public function getPizza(): Pizza
    {
        return $this->pizza;
    }
}
