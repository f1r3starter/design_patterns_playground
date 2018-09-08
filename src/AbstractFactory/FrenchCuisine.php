<?php

namespace Application\AbstractFactory;

class FrenchCuisine implements Cuisine
{
    private $name = 'French cuisine';
    private $firstMeal;
    private $secondMeal;

    public function __construct(CuisineFactory $factory)
    {
        $this->firstMeal = $factory->createFirstMeal();
        $this->secondMeal = $factory->createSecondMeal();
    }

    public function getFirstMeal(): Meal
    {
        return $this->firstMeal;
    }

    public function getSecondMeal(): Meal
    {
        return $this->secondMeal;
    }

    public function getName()
    {
        return $this->name;
    }
}