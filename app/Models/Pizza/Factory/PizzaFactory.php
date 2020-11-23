<?php 

namespace App\Models\Pizza\Factory;

use App\Models\Pizza\Pizza;

class PizzaFactory {

    public function getPizza(string $pizza): ?Pizza {
        if($pizza == null){
            return null;
        }		
        if(strtolower($pizza) === strtolower("Margherita")){
            return new MargheritaPizza();
            
        } else if(strtolower($pizza) === strtolower("Pepperoni")){
            return new PepperoniPizza();
        }
         
        return null;
    }
}