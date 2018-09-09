<?php

namespace Application\Visitor;

class Bacon implements Ingredient {

    public function visitPizzaMeat(PizzaMeat $pizzaMeat)
    {
        $pizzaMeat->addToCook('bacon');
    }

    public function visitPizzaVegan(PizzaVegan $pizzaVegan)
    {
        // do nothing
    }
}