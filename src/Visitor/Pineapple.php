<?php

namespace Application\Visitor;

class Pineapple implements Ingredient {

    public function visitPizzaMeat(PizzaMeat $pizzaMeat)
    {
        $pizzaMeat->addToCook('pineapple');
    }

    public function visitPizzaVegan(PizzaVegan $pizzaVegan)
    {
        $pizzaVegan->addToCook('pineapple');
    }
}