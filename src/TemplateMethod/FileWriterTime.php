<?php

namespace Application\TemplateMethod;

class FileWriterTime extends FileWriter
{
    protected function writeData()
    {
        return (new \DateTime())->getTimestamp();
    }
}