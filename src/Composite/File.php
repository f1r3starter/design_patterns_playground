<?php

namespace Application\Composite;

interface File
{
    public function getContents(int $indent): string;
}
