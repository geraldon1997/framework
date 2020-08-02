<?php
namespace App\Core;

class Config
{
    public static $APP_ROOT;
    public static $APP_URL;

    public function __construct()
    {
        self::$APP_ROOT = dirname(__DIR__).'/';
        self::$APP_URL = "mosco.test:8080";
    }

}