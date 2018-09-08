<?php

namespace Application\ChainOfResponsibility;

class Ambulance implements Emergency
{
    public function help($chain, $action)
    {
        if ($action === self::HEALTH) {
            return 'We will heal you';
        } else {
            $next = array_shift($chain);
            return (new $next)->help($chain, $action);
        }
    }
}