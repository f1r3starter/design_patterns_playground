<?php

namespace Application\TemplateMethod;

abstract class FileWriter
{
    protected $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function writeToFile()
    {
        $this->file->write($this->writeData() . PHP_EOL);
    }

    abstract protected function writeData();
}