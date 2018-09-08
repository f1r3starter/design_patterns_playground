<?php

require('../../vendor/autoload.php');

$file = new \Application\Memento\TextEditor('123');
echo $file->getText() . PHP_EOL;

$memento = new \Application\Memento\Memento();
$memento->addMemento('file.txt', $file);

$file->setText('1234');
echo $file->getText() . PHP_EOL;
$memento->addMemento('file01.txt', $file);

$memento->getMemento('file.txt', $file);

echo $file->getText() . PHP_EOL;