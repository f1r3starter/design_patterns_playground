<?php

namespace Application\Visitor;

class PizzaMeat extends Pizza
{
    public function addIngredient(Ingredient $ingredient)
    {
        $ingredient->visitPizzaMeat($this);
    }
}