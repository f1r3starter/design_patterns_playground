<?php

namespace Application\Mediator;

class Consierge
{
    private $house;

    public function __construct(House $house)
    {
        $this->house = $house;
    }

    public function giveService(string $service)
    {
        $service = new $service;
        $service->askedBy($this);
        return $service->giveService();
    }

    public function getAddress()
    {
        return $this->house->getAddress();
    }
}