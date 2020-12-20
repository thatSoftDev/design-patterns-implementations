<?php

namespace App\Providers;

use App\Models\Pizza\MargheritaPizzaBuilder;
use App\Models\Pizza\Pizza;
use App\Models\Pizza\PizzaBuilderInterface;
use App\Models\Pizza\PizzaInterface;
use App\Models\Pizza\Strategy\AddTopping;
use App\Models\Pizza\Strategy\RemoveTopping;
use App\Models\Pizza\Strategy\StrategyInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PizzaInterface::class, Pizza::class);
        $this->app->bind(PizzaBuilderInterface::class, MargheritaPizzaBuilder::class);
        $this->app->bind(StrategyInterface::class, AddTopping::class);
        $this->app->bind(StrategyInterface::class, RemoveTopping::class);

    }
}
