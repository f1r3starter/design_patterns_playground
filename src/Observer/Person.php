<?php

namespace Application\Observer;

abstract class Person
{
    public function __construct(ForecastStationInterface $forecastStation)
    {
        $forecastStation->subscribe($this);
    }

    public function notifyForecast(int $status)
    {
        if ($status === ForecastStationInterface::BAD_WEATHER) {
            echo $this->badForecast() . PHP_EOL;
        } elseif ($status === ForecastStationInterface::GOOD_WEATHER) {
            echo $this->goodForecast() . PHP_EOL;
        }
    }

    abstract protected function goodForecast();

    abstract protected function badForecast();
}