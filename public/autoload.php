<?php
spl_autoload_register('loadClasses');

function loadClasses($classname)
{
    $class = '../'.str_replace('\\', '/', $classname).'.php';

    if (file_exists($class)) {
        require_once $class;
    }
}