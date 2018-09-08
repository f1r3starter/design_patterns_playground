<?php

namespace Application\Decorator;

class EmptyPizza implements Pizza
{

    public function bake()
    {
        return 'This is pizza with';
    }
}