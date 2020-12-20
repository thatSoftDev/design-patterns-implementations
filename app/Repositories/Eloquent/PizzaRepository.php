<?php

namespace App\Repositories\Eloquent;

use App\Models\Pizza\Pizza;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\PizzaRepositoryInterface;

class PizzaRepository extends EloquentRepository implements PizzaRepositoryInterface {

    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }
}