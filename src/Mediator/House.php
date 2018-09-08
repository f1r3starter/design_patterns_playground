<?php

namespace Application\Mediator;

class House
{
    private $address;

    public function __construct(string $address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}