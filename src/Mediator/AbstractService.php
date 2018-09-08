<?php

namespace Application\Mediator;

abstract class AbstractService implements Service
{
    const FLOWERS = Flowers::class;
    const TAXI = Taxi::class;
    const MASTER = Master::class;

    private $consierge;

    public function giveService()
    {
        if ($this->consierge !== null) {
            return $this->getServiceName() . ' by address ' . $this->consierge->getAddress();
        }
    }

    public function askedBy(Consierge $consierge)
    {
        $this->consierge = $consierge;
    }

    abstract function getServiceName(): string;
}