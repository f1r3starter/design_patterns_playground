<?php

namespace Application\AbstractFactory;

class FrenchCuisineFactory implements CuisineFactory
{
    public function createFirstMeal()
    {
        return new FrenchFirstMeal();
    }

    public function createSecondMeal()
    {
        return new FrenchSecondMeal();
    }
}