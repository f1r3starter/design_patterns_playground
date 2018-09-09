<?php

namespace Application\Visitor;

class PizzaVegan extends Pizza
{
    public function addIngredient(Ingredient $ingredient)
    {
        $ingredient->visitPizzaVegan($this);
    }
}