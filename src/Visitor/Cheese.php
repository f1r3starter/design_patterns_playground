<?php

namespace Application\Visitor;

class Cheese implements Ingredient {

    public function visitPizzaMeat(PizzaMeat $pizzaMeat)
    {
        $pizzaMeat->addToCook('cheese');
    }

    public function visitPizzaVegan(PizzaVegan $pizzaVegan)
    {
        $pizzaVegan->addToCook('cheese');
    }
}