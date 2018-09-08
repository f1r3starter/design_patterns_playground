<?php

require('../../vendor/autoload.php');

$invoker = new \Application\Command\Invoker();
$pizza = new \Application\Command\Pizza();

$invoker->do(new \Application\Command\Cheese(), $pizza);
$invoker->do(new \Application\Command\Bacon(), $pizza);
$invoker->do(new \Application\Command\Pineapple(), $pizza);
$invoker->execute();
echo implode(PHP_EOL, $pizza->showRecipe());

echo PHP_EOL . "---------------UNDO----------------" . PHP_EOL;

$invoker->undo();

echo implode(PHP_EOL, $pizza->showRecipe());