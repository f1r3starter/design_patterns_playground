<?php

namespace Application\TemplateMethod;

class FileWriterDate extends FileWriter
{
    protected function writeData()
    {
        return (new \DateTime())->format('d.m.y');
    }
}