<?php
namespace App\Core;

class Request
{
    public static function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public static function isGet()
    {
        if (self::method() === 'get') {
            return true;
        }
        return false;
    }

    public static function isPost()
    {
        if (self::method() === 'post') {
            return true;
        }
        return false;
    }

    public static function path()
    {
        $fullpath = $_SERVER['REQUEST_URI'];

        $count = str_word_count($fullpath);

        if ($count !== 0) {
            $position = strpos($fullpath, '?');

            if ($position) {
                $path = substr($fullpath, 0, $position);
                $path = rtrim($path, '/');
                return $path;
            }

            $path = rtrim($fullpath, '/');
            return $path;
            
        }
        
        $path = $fullpath;
        return $path;
    }

    public static function fullPath()
    {
        $fullpath = $_SERVER['REQUEST_URI'];
        $position = strpos($fullpath, '?');
        if ($position) {
            $path = $fullpath;
            return $path;
        }

        $path = rtrim($fullpath, '/');
        return $path;
    }

    public static function url()
    {
        //
    }

    public static function fullUrl()
    {
        //
    }
}