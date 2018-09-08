<?php

namespace Application\ChainOfResponsibility;

class Police implements Emergency
{
    public function help($chain, $action)
    {
        if ($action === self::ROBBERY) {
            return 'We will catch a robber';
        } else {
            $next = array_shift($chain);
            return (new $next)->help($chain, $action);
        }
    }
}