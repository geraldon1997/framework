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

    public function __construct()
    {
        self::$requestPath = Request::path();
        self::$requestUrl = Request::url();
        self::$requestFullUrl = Request::fullUrl();
    }

    public static function register(array $routesArray)
    {
        self::$routes = $routesArray;
    }

    public static function resolve()
    {
        $pageCheck = array_key_exists(self::$requestPath, self::$routes);
        if ($pageCheck) {
            $action = self::$routes[self::$requestPath];
            if (strpos($action, '@')) {
                echo 'exists';
            } else {
                echo 'not exists';
            }
        } else {
            die('page not found');
        }
    }
}