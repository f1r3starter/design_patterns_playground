<?php

namespace Application\FactoryMethod;

class Pie implements Food
{

    private $flavour;

    public function __construct(Flavour $flavour)
    {
        $this->flavour = $flavour;
    }

    public function eat()
    {
        return 'What a nice pie with a flavour of ' . $this->flavour->getName() . PHP_EOL;
    }
}