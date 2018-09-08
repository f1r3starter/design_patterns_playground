<?php

require('../../vendor/autoload.php');

$prefer = 'French';

if ($prefer === 'French') {
    $frenchCuisine = new \Application\AbstractFactory\FrenchCuisine(new \Application\AbstractFactory\FrenchCuisineFactory());
    echo $frenchCuisine->getFirstMeal()->getName() . PHP_EOL;
    echo $frenchCuisine->getSecondMeal()->getName() . PHP_EOL;
} else {
    $otherCuisine = new \Application\AbstractFactory\ItalianCuisine(new \Application\AbstractFactory\ItalianCuisineFactory());
    echo $otherCuisine->getFirstMeal()->getName() . PHP_EOL;
    echo $otherCuisine->getSecondMeal()->getName() . PHP_EOL;
}