<?php
namespace App\Core;

use App\Core\Request;
use App\Core\Configuration;

class Route
{
    public static $requestPath;
    public static $requestUrl;
    public static $requestFullUrl;

    public function __construct()
    {
        self::$requestPath = Request::path();
        self::$requestUrl = Request::url();
        self::$requestFullUrl = Request::fullUrl();
    }
    public static function get(string $path, string $action)
    {
        if (self::$requestPath == $path) {
            echo $action;
        }
    }

    public static function view(string $path, string $view)
    {
        if (self::$requestPath === $path) {
            echo 'the paths matched';
        } elseif (self::$requestPath != $path) {
            echo 'paths dont match';
        }
    }
}
