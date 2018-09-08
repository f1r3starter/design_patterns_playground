<?php

require('../../vendor/autoload.php');

$pizza = new \Application\Builder\Pizza(
    (new \Application\Builder\PizzaBaker())
        ->addBacon()
        ->addCheese()
);

echo $pizza->getRecipe() . PHP_EOL;