<?php

namespace Application\Composite;

abstract class AbstractFile implements File
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    abstract protected function getDelimiter(): string;

    /**
     * @param int $indent
     *
     * @return string
     */
    protected function buildContents(int $indent): string
    {
        return str_repeat('  ', $indent) . $this->getDelimiter() . $this->name . PHP_EOL;
    }
}
