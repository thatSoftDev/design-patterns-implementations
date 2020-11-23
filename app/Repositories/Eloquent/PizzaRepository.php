<?php

use App\Models\Pizza\Pizza;
use App\Repositories\Eloquent\EloquentRepository;

class PizzaRepository extends EloquentRepository {

    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }
}