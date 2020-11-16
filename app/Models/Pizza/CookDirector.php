<?php

namespace App\Models\Pizza;

class CookDirector
{
    private PizzaBuilderInterface $pizzaBuilder;

    function __construct(PizzaBuilderInterface $pizzaBuilder)
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function makePizza(): void
    {
        $this->pizzaBuilder->makeDough();
        $this->pizzaBuilder->addSauce();
        $this->pizzaBuilder->addTopping();
    }

    public function getPizza(): Pizza
    {
        return $this->pizzaBuilder->getPizza();
    }
}
