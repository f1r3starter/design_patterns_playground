<?php

namespace Application\Mediator;

interface Service {
    public function giveService();
    public function askedBy(Consierge $consierge);
}