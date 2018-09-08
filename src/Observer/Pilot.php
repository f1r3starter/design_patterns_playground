<?php

namespace Application\Observer;

class Pilot extends Person
{
    protected function goodForecast()
    {
        return 'I will fly today';
    }

    protected function badForecast()
    {
        return 'I will not fly today';
    }
}