<?php
namespace App\Core;

class Route
{
    public static array $routes;

    public static function start()
    {
        $path = Request::path();
        $method = Request::method();
        $routes = self::$routes[$method];
        return $routes[$path];
    }

    public static function get($path, $callback)
    {
        self::$routes['get'][$path] = $callback;
    }

    public static function post($path, $callback)
    {
        self::$routes['post'][$path] = $callback;
    }

    public static function view($path, $view)
    {
        self::$routes['get'][$path] = $view;
    }

}