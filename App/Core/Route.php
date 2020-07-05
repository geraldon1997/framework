<?php
namespace App\Core;

use App\Core\Request;
use App\Core\Configuration;

class Route
{
    public static $routes;
    public static $requestPath;
    public static $requestUrl;
    public static $requestFullUrl;
    public static $requestType;

    public function __construct()
    {
        self::$requestPath = Request::path();
        self::$requestUrl = Request::url();
        self::$requestFullUrl = Request::fullUrl();
        self::$requestType = Request::type();
    }

    public static function register(array $routesArray)
    {
        self::$routes = $routesArray;
    }

    public static function resolve()
    {
        Configuration::loadConfig('classes');
        $controller = Configuration::getConfig('controllers');
        $request = self::$routes[self::$requestType];
        $pathCheck = array_key_exists(self::$requestPath, $request);
        if ($pathCheck) {
            $action = $request[self::$requestPath];
            if (strpos($action, '@')) {
                $actionArray = explode('@', $action);
                $class = str_replace('/', '\\', $controller.$actionArray[0]);
                $method = $actionArray[1];
                if (class_exists($class)) {
                    if (method_exists($class, $method)) {
                        call_user_func([$class, $method]); 
                    } else {
                        echo 'method not found';
                    }
                } else {
                    echo 'class not found';
                }
            } else {
                View::make($action);
            }
        } else {
            echo 'page not found';
        }
    }
}