<?php

namespace Application\ChainOfResponsibility;

class Fireman implements Emergency
{
    public function help($chain, $action)
    {
        if ($action === self::FIRE) {
            return 'We will extinguish your fire';
        } else {
            $next = array_shift($chain);
            return (new $next)->help($chain, $action);
        }
    }
}