<?php
spl_autoload_register('autoload');

function autoload($className)
{
    $class = str_replace('\\', '/', $className);
    if (file_exists($class)) {
        require_once $class;
    } else {
        return $className." not found";
    }
}
