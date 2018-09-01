<?php

namespace Application\FactoryMethod;

class BreadBakingFactory implements BakingFactory
{
    public static function bake(Flavour $flavour)
    {
        return new Bread($flavour);
    }
}