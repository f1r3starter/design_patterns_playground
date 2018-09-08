<?php

namespace Application\Decorator;

class BaconPizza implements Pizza
{
    private $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function bake()
    {
        return $this->pizza->bake() . ' bacon';
    }
}