<?php

namespace Application\AbstractFactory;

abstract class Meal
{
    protected $name;

    public function getName()
    {
        return 'I am ' . $this->name;
    }
}