<?php

namespace Application\Observer;

class BeachBoy extends Person
{
    protected function goodForecast()
    {
        return 'I will swim today';
    }

    protected function badForecast()
    {
        return 'I will not swim today';
    }
}