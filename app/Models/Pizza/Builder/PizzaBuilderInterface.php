<?php

namespace App\Models\Pizza\Builder;

use App\Models\Pizza\Pizza;

interface PizzaBuilderInterface
{
    public function makeDough(): void;
    public function addSauce(): void;
    public function addTopping(): void;
    public function getPizza(): Pizza;
}
