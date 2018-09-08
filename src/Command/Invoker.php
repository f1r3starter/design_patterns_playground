<?php

namespace Application\Command;

class Invoker {

    private $queue;

    public function do(Ingredient $ingredient, Pizza $pizza)
    {
        $this->queue[] = ['ingredient' => $ingredient, 'pizza' => $pizza];
    }

    public function execute()
    {
        foreach ($this->queue as $value)
        {
            $value['ingredient']->add($value['pizza']);
        }
    }

    public function undo()
    {
        $value = array_pop($this->queue);
        $value['ingredient']->remove($value['pizza']);
    }
}