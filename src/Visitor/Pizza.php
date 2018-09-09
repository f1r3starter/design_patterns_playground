<?php

namespace Application\Visitor;

abstract class Pizza
{
    protected $ingredients = [];
    private $cooking;

    public function addToCook(string $string)
    {
        $this->cooking[] = $string;
    }

    public function getRecipe()
    {
        return $this->cooking;
    }

    abstract public function addIngredient(Ingredient $ingredient);
}