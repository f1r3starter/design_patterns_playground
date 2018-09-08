<?php

namespace Application\Mediator;

class Master extends AbstractService
{
    public function getServiceName(): string
    {
        return 'Master has arrived';
    }
}