<?php

namespace Application\Mediator;

class Flowers extends AbstractService
{
    public function getServiceName(): string
    {
        return 'Flowers has arrived';
    }
}