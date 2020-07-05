<?php
namespace App\Core;

class Request
{
    public static function path()
    {
        $path = $_SERVER['PATH_INFO'];
        if ($path == '/') {
            return $path;
        } else {
            return rtrim($path, '/');
        }
    }

    public static function url()
    {
        return $_SERVER['HTTP_HOST'].self::path();
    }

    public static function fullUrl()
    {
        return self::url().$_SERVER['QUERY_STRING'];
    }

    public static function protocol()
    {
        return $_SERVER['REQUEST_SCHEME'];
    }

    public static function type()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}