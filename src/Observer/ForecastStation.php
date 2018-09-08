<?php

namespace Application\Observer;

class ForecastStation implements ForecastStationInterface
{
    private $listeners;
    private $status;

    public function subscribe(Person $person)
    {
        $this->listeners[] = $person;
    }

    public function unsubscribe(Person $person)
    {
        foreach ($this->listeners as $key => $listener) {
            if ($listener === $person) {
                unset($this->listeners[$key]);
            }
        }
    }

    public function setWeather(int $weatherStatus)
    {
        $this->status = $weatherStatus;
        foreach ($this->listeners as $listener) {
            $listener->notifyForecast($weatherStatus);
        }
    }
}