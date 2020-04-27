<?php
namespace App\Core;

class Config
{
    public static $confFile;
    public static $dataFile;

    public static function loadConf($conf)
    {
        $config = 'App/Config/'.$conf.'.php';
        self::$confFile = require_once $config;
    }

    public static function getConf($path)
    {
        self::$dataFile = self::$confFile;

        $pathArray = explode('.', $path);

        foreach ($pathArray as $key) {
            if (isset(self::$dataFile[$key])) {
                self::$dataFile = self::$dataFile[$key];
            } else {
                return 'path not found or incorrect';
            }
        }
        return self::$dataFile;
    }
}
