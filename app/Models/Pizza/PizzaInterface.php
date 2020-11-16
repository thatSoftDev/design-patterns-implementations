<?php

namespace App\Models\Pizza;

interface PizzaInterface
{
    public function setDough(string $dough): void;

    public function setSauce(string $sauce): void;

    public function setTopping(string $topping): void;
}
