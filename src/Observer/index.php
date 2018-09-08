<?php

require('../../vendor/autoload.php');


$station = new \Application\Observer\ForecastStation();

$pilot = new \Application\Observer\Pilot($station);
$beachBoy = new \Application\Observer\BeachBoy($station);
$sailor = new \Application\Observer\Sailor($station);

$station->setWeather(\Application\Observer\ForecastStationInterface::GOOD_WEATHER);
echo PHP_EOL;
$station->setWeather(\Application\Observer\ForecastStationInterface::BAD_WEATHER);