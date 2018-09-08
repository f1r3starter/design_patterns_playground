<?php

namespace Application\Bridge;

class SecondMeal implements Meal
{
    public function getName(): string {
        return 'Second meal';
    }
}