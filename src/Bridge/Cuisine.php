<?php

namespace Application\Bridge;

interface Cuisine
{
    public function __construct(Meal $meal);

    public function changeMeal(Meal $meal);

    public function prepare();
}