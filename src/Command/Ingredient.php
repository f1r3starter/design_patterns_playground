<?php

namespace Application\Command;

interface Ingredient
{
    public function add(Pizza $pizza);

    public function remove(Pizza $pizza);
}