<?php

namespace Application\Builder;

class PizzaBaker implements Baker {

    private $cheese = false;
    private $bacon = false;
    private $pineapple = false;

    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    public function addBacon()
    {
        $this->bacon = true;
        return $this;
    }

    public function addPineapple()
    {
        $this->pineapple = true;
        return $this;
    }

    public function getBacon()
    {
        return $this->bacon;
    }

    public function getCheese()
    {
        return $this->cheese;
    }

    public function getPineapple()
    {
        return $this->pineapple;
    }
}