<?php

namespace App\Models\Pizza;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model implements PizzaInterface
{
    private string $dough;
    private string $sauce;
    private string $topping;

    public function setDough(string $dough): void
    {
        $this->dough = $dough;
    }

    public function setSauce(string $sauce): void
    {
        $this->sauce = $sauce;
    }

    public function setTopping(string $topping): void
    {
        $this->topping = $topping;
    }
}
