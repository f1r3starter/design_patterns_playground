<?php

namespace Application\ChainOfResponsibility;

class Terminator implements Emergency
{
    public function help($chain, $action)
    {
        return 'Only god can save you';
    }
}