<?php

namespace App\Http\Controllers;

use App\Models\Pizza\Builder\CookDirector;
use App\Models\Pizza\Builder\MargheritaPizzaBuilder;
use App\Models\Pizza\Pizza;
use App\Models\Pizza\Factory\PizzaFactory;
use App\Models\Pizza\Strategy\AddTopping;
use App\Models\Pizza\Strategy\Context;
use App\Models\Pizza\Strategy\RemoveTopping;
use App\Repositories\PizzaRepositoryInterface;

class ExampleController extends Controller
{
    private $pizzaRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PizzaRepositoryInterface $pizzaRepository)
    {
        $this->pizzaRepository = $pizzaRepository;
    }

    public function builder() 
    {
        $pizza = new Pizza();
        $pizzaBuilder = new MargheritaPizzaBuilder($pizza);
        $cook = new CookDirector($pizzaBuilder);
        $cook->makePizza();
    
        dd($cook->getPizza());
    }

    public function factory() 
    {
        $pizzaFactory = new PizzaFactory();

        $pepporiniPizza = $pizzaFactory->getPizza("Pepperoni");
        $margheritaPizza = $pizzaFactory->getPizza("Margherita");
    
        $pepporiniPizza->cookPizza();
        $margheritaPizza->cookPizza();
    }

    public function repository() 
    {
        dd($this->pizzaRepository->all());
    }

    public function strategy() 
    {
        $context = new Context(new AddTopping());		
        echo("Adding toppings, total = " . $context->executeStrategy(10, 5));
        
        $context = new Context(new RemoveTopping());		
        echo("Adding toppings, total = " . $context->executeStrategy(10, 5));
    }
}
