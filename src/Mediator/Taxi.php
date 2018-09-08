<?php

namespace Application\Mediator;

class Taxi extends AbstractService
{
    public function getServiceName(): string
    {
        return 'Taxi has arrived';
    }
}