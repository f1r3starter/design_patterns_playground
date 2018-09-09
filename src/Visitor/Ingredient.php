<?php

namespace Application\Visitor;

interface Ingredient {
    public function visitPizzaMeat(PizzaMeat $pizzaMeat);

    public function visitPizzaVegan(PizzaVegan $pizzaVegan);
}