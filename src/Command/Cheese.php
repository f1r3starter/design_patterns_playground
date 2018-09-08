<?php

namespace Application\Command;

class Cheese extends AbstractIngredient
{
    public function getName(): string
    {
        return 'cheese';
    }
}