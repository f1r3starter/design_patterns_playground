<?php

namespace Application\Command;

abstract class AbstractIngredient implements Ingredient
{
    public function add(Pizza $pizza)
    {
        $pizza->add($this);
    }

    public function remove(Pizza $pizza)
    {
        $pizza->remove($this);
    }

    abstract public function getName(): string;
}