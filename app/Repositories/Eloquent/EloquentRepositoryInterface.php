<?php

namespace App\Repositories\Eloquent;

use Illuminate\Support\Collection;

interface EloquentRepositoryInterface {

    public function all(): Collection; 
}