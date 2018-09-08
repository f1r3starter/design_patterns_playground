<?php

namespace Application\Memento;

class TextEditor implements Editor
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function setText(string $string)
    {
        $this->text = $string;
    }

    public function getText(): string
    {
        return $this->text;
    }
}