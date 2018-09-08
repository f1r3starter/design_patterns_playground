<?php

require('../../vendor/autoload.php');

$cuisine = new \Application\Bridge\ItalianCuisine((new \Application\Bridge\FirstMeal()));

echo $cuisine->prepare() . PHP_EOL;

