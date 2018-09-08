<?php

namespace Application\Observer;

interface ForecastStationInterface {
    const BAD_WEATHER = 0;
    const GOOD_WEATHER = 1;

    public function subscribe(Person $person);

    public function unsubscribe(Person $person);
}