<?php

namespace Application\TemplateMethod;

class File {
    private $file;

    public function __construct($file)
    {
        $this->file = fopen($file, "w+") or die("Unable to open file!");
    }

    public function write($data)
    {
        fwrite($this->file, $data);
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}