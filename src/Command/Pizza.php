<?php

namespace Application\Command;

class Pizza
{
    private $ingredients = ['dough' => 'yes'];

    public function add(Ingredient $ingredient)
    {
        $this->ingredients[$ingredient->getName()] = 'yes';
    }

    public function remove(Ingredient $ingredient)
    {
        if (isset($this->ingredients[$ingredient->getName()])) {
            unset($this->ingredients[$ingredient->getName()]);
        }
    }

    public function showRecipe()
    {
        return array_keys($this->ingredients);
    }
}