<?php

namespace Application\Memento;

interface Editor {
    public function setText(string $string);

    public function getText(): string;
}