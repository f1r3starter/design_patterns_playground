<?php

require('../../vendor/autoload.php');

$chain = [
    \Application\ChainOfResponsibility\Fireman::class,
    \Application\ChainOfResponsibility\Police::class,
    \Application\ChainOfResponsibility\Ambulance::class,
    \Application\ChainOfResponsibility\Terminator::class
];

$helper = array_shift($chain);
echo (new $helper)->help($chain, \Application\ChainOfResponsibility\Emergency::ROBBERY);