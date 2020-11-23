<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EloquentRepository implements EloquentRepositoryInterface {

    protected $model;
    
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    public function all(): Collection 
    {
        return $this->model->all();
    }
}