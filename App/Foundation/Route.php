<?php
namespace App\Foundation;

use App\Foundation\Config;

class Route
{
    private static $controller;

    public function __construct()
    {
        Config::load('routing');
        self::$controller = str_replace('/', '\\', Config::get('root.controllers'));
    }

    public static function get($path, $method)
    {
        if ($path == $_SERVER['REQUEST_URI']) {
            if (!empty($method)) {
                if (stripos($method, '@')) {
                    $function = explode('@', $method);
                    $class = self::$controller.$function[0];
                    if (class_exists($class)) {
                        if (method_exists($class, $function[1])) {
                            call_user_func([new $class, $function[1]]);
                        } else {
                            echo 'method '.$function[1].' not found';
                        }
                    } else {
                        echo 'class '.$function[0].' not found';
                    }
                } else {
                    echo 'syntax error at class '.$method.' in routes.php';
                }
            }
        }
    }

    public static function post()
    {
        //
    }

    public static function put()
    {
        //
    }

    public static function delete()
    {
        //
    }
}
