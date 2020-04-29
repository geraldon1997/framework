<?php
namespace App\Core;

use App\Core\Config;

class Route
{
    public static $controller;
    public static $url;

    public static function init()
    {
        self::$url = $_SERVER['REQUEST_URI'];
        self::$controller = 'App\\Controllers\\';
    }

    public static function get($path, $callback)
    {
        self::init();

        if (self::$url === $path) {
            $methodArray = explode('@', $callback);
            $class = self::$controller.$methodArray[0];
            $method = $methodArray[1];
    
            if (class_exists($class)) {
                if (method_exists($class, $method)) {
                    call_user_func([$class, $method]);
                } else {
                    echo 'method not found';
                }
            }
        } else {
            echo 'page not found';
        }
    }

    public static function view()
    {
        //
    }
}
