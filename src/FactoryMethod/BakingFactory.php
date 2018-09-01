<?php

namespace Application\FactoryMethod;

interface BakingFactory
{
    public static function bake(Flavour $flavour);
}