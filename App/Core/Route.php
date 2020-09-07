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
        $checkpath = array_key_exists($path, $routes);
        
        if ($checkpath) {
            $callback = $routes[$path];
            
            $delimiter = strpos($callback, '@');

            if ($delimiter) {
                $callback_array = explode('@', $callback);
                $class = 'App\Controllers\\'.$callback_array[0];
                
                if (class_exists($class)) {
                    return $class;
                }

                return 'controller class not found';
                
            }

            return "<a href='/contact'>contact</a>";
        }

        return 'page not found';
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