<?php

require('../../vendor/autoload.php');

use Application\Composite\Directory;
use Application\Composite\RegularFile;

$root = new Directory('/');

$pic = new RegularFile('kitten.jpeg');
$log = new RegularFile('nginx.log');

$home = new Directory('home');
$pictures = new Directory('pictures');
$var = new Directory('var');
$logDir = new Directory('log');
$logDir->addFile($log);
$var->addFile($logDir);

$pictures->addFile($pic);
$home->addFile($pictures);

$root
    ->addFile($pictures)
    ->addFile($var);

echo $root->getContents();
