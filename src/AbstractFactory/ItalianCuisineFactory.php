<?php

namespace Application\AbstractFactory;

class ItalianCuisineFactory implements CuisineFactory
{
    public function createFirstMeal()
    {
        return new ItalianFirstMeal();
    }

    public function createSecondMeal()
    {
        return new ItalianSecondMeal();
    }
}