<?php

require('../../vendor/autoload.php');

$flavour = new \Application\FactoryMethod\Flavour('vishnya');

$bread = \Application\FactoryMethod\BreadBakingFactory::bake($flavour);

echo $bread->eat();

$pie = \Application\FactoryMethod\PieBakingFactory::bake($flavour);

echo $pie->eat();