<?php

namespace Application\Composite;

class RegularFile extends AbstractFile
{
    /**
     * @inheritDoc
     */
    protected function getDelimiter(): string
    {
        return '-';
    }

    public function getContents(int $indent): string
    {
        return $this->buildContents($indent);
    }
}
