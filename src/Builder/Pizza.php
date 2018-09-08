<?php

namespace Application\Builder;

class Pizza {
    private $cheese;
    private $bacon;
    private $pineapple;

    public function __construct(PizzaBaker $pizzaBaker)
    {
        $this->cheese = $pizzaBaker->getCheese();
        $this->bacon = $pizzaBaker->getBacon();
        $this->pineapple = $pizzaBaker->getPineapple();
    }

    public function getRecipe()
    {
        $recipe = 'This is pizza with ';
        $recipes = [];
        if ($this->cheese) {
            $recipes[] = 'cheese';
        }
        if ($this->bacon) {
            $recipes[] = 'bacon';
        }
        if ($this->pineapple) {
            $recipes[] = 'pineapple';
        }
        return $recipe . implode(', ', $recipes);
    }
}