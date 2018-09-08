<?php

namespace Application\Bridge;

class ItalianCuisine implements Cuisine
{
    private $meal;
    public function __construct(Meal $meal)
    {
        $this->meal = $meal;
    }

    public function changeMeal(Meal $meal)
    {
        $this->meal = $meal;
    }

    public function prepare()
    {
        return $this->meal->getName() . ' of Italian Cuisine';
    }
}