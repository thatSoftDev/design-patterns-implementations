<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Pizza\Builder\CookDirector;
use App\Models\Pizza\Builder\MargheritaPizzaBuilder;
use App\Models\Pizza\Pizza;
use App\Models\Pizza\Factory\PizzaFactory;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/builder', function () use ($router) {
    $pizza = new Pizza();
    $pizzaBuilder = new MargheritaPizzaBuilder($pizza);
    $cook = new CookDirector($pizzaBuilder);
    $cook->makePizza();

    dd($cook->getPizza());
});


$router->get('/factory', function () use ($router) {    
    $pizzaFactory = new PizzaFactory();

    $pepporiniPizza = $pizzaFactory->getPizza("Pepperoni");
    $margheritaPizza = $pizzaFactory->getPizza("Margherita");

    $pepporiniPizza->cookPizza();
    $margheritaPizza->cookPizza();
});
