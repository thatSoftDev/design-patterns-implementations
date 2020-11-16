<?php

namespace App\Models\Pizza;

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
