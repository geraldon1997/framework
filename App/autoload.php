<?php
session_start();

function classLoader($className){
    $newClass = str_replace('\\', '/', $className);
    $class = $className.'.php';

    if (file_exists($class)) {
        require_once $class;
    }
}