<?php

require('../../vendor/autoload.php');

$file = new \Application\TemplateMethod\File('1.txt');

(new \Application\TemplateMethod\FileWriterDate($file))->writeToFile();

(new \Application\TemplateMethod\FileWriterTime($file))->writeToFile();