<?php

require('../../vendor/autoload.php');

$cheese = new \Application\Visitor\Cheese();
$pineapple = new \Application\Visitor\Pineapple();
$bacon = new \Application\Visitor\Bacon();

$meatPizza = new \Application\Visitor\PizzaMeat();
$meatPizza->addIngredient($cheese);
$meatPizza->addIngredient($pineapple);
$meatPizza->addIngredient($bacon);
echo implode(PHP_EOL, $meatPizza->getRecipe());
echo PHP_EOL . '-----------------' . PHP_EOL;

$veganPizza = new \Application\Visitor\PizzaVegan();
$veganPizza->addIngredient($cheese);
$veganPizza->addIngredient($pineapple);
$veganPizza->addIngredient($bacon);
echo implode(PHP_EOL, $veganPizza->getRecipe()) . PHP_EOL;