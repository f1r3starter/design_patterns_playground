<?php

namespace Application\Composite;

class Directory extends AbstractFile
{
    /**
     * @var File[]
     */
    private $files = [];

    public function addFile(File $file): self
    {
        $this->files[] = $file;

        return $this;
    }

    public function getContents(int $indent = 0): string
    {
        $result = $this->buildContents($indent);
        foreach ($this->files as $file) {
            $result .= $file->getContents($indent + 1);
        }

        return $result;
    }

    /**
     * @inheritDoc
     */
    protected function getDelimiter(): string
    {
        return '*';
    }
}
