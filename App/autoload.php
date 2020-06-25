<?php
spl_autoload_register("classLoader");

function classLoader($className)
{
    $newClass = str_replace('\\', '/', $className);
    $class = '../'.$newClass.'.php';

    if (file_exists($class)) {
        require_once $class;
    }
}