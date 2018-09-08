<?php

namespace Application\Bridge;

class FirstMeal implements Meal
{
    public function getName(): string {
        return 'First meal';
    }
}