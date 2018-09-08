<?php

namespace Application\AbstractFactory;

interface CuisineFactory {
    public function createFirstMeal();

    public function createSecondMeal();
}