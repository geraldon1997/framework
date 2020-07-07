<?php
namespace App\Core;

use App\Controllers\UserController;

class Route
{
    public static $routes;
    public static $requestType;
    public static $requestPath;

    public static function register(array $routes)
    {
        self::$routes = $routes;
        self::$requestType = Request::type();
        self::$requestPath = Request::path();
    }

    public static function resolve()
    {
        $request = self::$routes[self::$requestType];
        $pathCheck = array_key_exists(self::$requestPath, $request);
        if ($pathCheck) {
            $action = $request[self::$requestPath];
            if (strpos($action, '@')) {
                $actionArray = explode('@', $action);
                $class = 'App\\Controllers\\'.$actionArray[0];
                if (class_exists($class)) {
                    $method = $actionArray[1];
                    if (method_exists($class, $method)) {
                        call_user_func([$class, $method]);
                    } else {
                        echo 'method not found';
                    }
                } else {
                    echo 'class not found';
                }
            } else {
                echo 'doesnt exist';
            }
        } else {
            echo 'page not found';
        }
    }
}