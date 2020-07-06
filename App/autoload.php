<?php
spl_autoload_register('classLoader');

function classLoader($className)
{
    $class = '../'.str_replace('\\', '/', $className).'.php';
    if (file_exists($class)) {
        require_once $class;
    }
}