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
        $request = self::$routes[self::$requestType];
        $pathCheck = array_key_exists(self::$requestPath, $request);
        if ($pathCheck) {
            $action = $request[self::$requestPath];
            if (strpos($action, '@')) {
                $actionArray = explode('@', $action);
            } else {
                echo "this is not a method <br>";
                echo $action;
            }
        } else {
            echo 'page not found';
        }
    }
}