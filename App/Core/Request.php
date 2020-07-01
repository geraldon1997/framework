<?php
namespace App\Core;

class Request
{
    public static function path()
    {
        return $_SERVER['PATH_INFO'];
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