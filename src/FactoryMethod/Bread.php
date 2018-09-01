<?php

namespace Application\FactoryMethod;

class Bread implements Food
{
    private $flavour;

    public function __construct(Flavour $flavour)
    {
        $this->flavour = $flavour;
    }

    public function eat()
    {
        return 'What a nice bread with a flavour of ' . $this->flavour->getName() . PHP_EOL;
    }
}