<?php

require('../../vendor/autoload.php');


$house = new \Application\Mediator\House('Улица Пушкина, Дом Колотушкина');

$consierge = new \Application\Mediator\Consierge($house);

echo $consierge->giveService(\Application\Mediator\AbstractService::FLOWERS) . PHP_EOL;
echo $consierge->giveService(\Application\Mediator\AbstractService::MASTER) . PHP_EOL;
echo $consierge->giveService(\Application\Mediator\AbstractService::TAXI) . PHP_EOL;