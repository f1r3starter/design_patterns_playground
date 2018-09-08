<?php

require('../../vendor/autoload.php');


echo (new \Application\Decorator\PineapplePizza(
        new \Application\Decorator\BaconPizza(
            new \Application\Decorator\CheesePizza(
                new \Application\Decorator\EmptyPizza()
            )
        )
    ))->bake() . PHP_EOL;