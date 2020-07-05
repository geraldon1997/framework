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
        foreach (self::$routes as $key => $values) {
            if (self::$requestType == $key) {
                $path = array_key_exists(self::$requestPath, $values);
                if ($path) {
                    $action = $values[self::$requestPath];
                    if (strpos($action, '@')) {
                        echo 'method';
                    } else {
                        echo 'not method';
                    }
                }
            }
        }
    }
}