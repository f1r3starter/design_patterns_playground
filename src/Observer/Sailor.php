<?php

namespace Application\Observer;

class Sailor extends Person
{
    protected function goodForecast()
    {
       return 'I will sail today';
    }

    protected function badForecast()
    {
        return 'I will not sail today';
    }
}