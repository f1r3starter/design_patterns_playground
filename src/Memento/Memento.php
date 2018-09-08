<?php

namespace Application\Memento;

class Memento {
    private $states;

    public function addMemento($version, Editor $editor) {
        $this->states[$version] = $editor->getText();
    }

    public function getMemento($version, Editor $editor) {
        if (isset($this->states[$version])) {
            $editor->setText($this->states[$version]);
        }
    }
}