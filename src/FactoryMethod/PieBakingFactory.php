<?php

namespace Application\FactoryMethod;

class PieBakingFactory implements BakingFactory
{
    public static function bake(Flavour $flavour)
    {
        return new Pie($flavour);
    }
}