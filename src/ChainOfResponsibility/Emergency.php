<?php

namespace Application\ChainOfResponsibility;

interface Emergency
{
    public function help($chain, $action);

    const FIRE = 'fire';
    const HEALTH = 'health';
    const ROBBERY = 'robbery';
}