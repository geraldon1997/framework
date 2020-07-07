<?php
namespace App\Core;

class Request
{
    public static function type()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function path()
    {
        $path = $_SERVER['PATH_INFO'];
        if ($path == '/') {
            return $path;
        } else {
            return rtrim($path, '/');
        }
    }
}