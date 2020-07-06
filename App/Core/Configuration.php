<?php
namespace App\Core;

class Configuration
{
    public static $data;
    public static $file;

    public static function loadConfigFile(string $configFile)
    {
        self::$file = require_once '../App/Configs/'.$configFile.'.php';
    }

    public static function getConfigData(string $path)
    {
        self::$data = self::$file;
        if (strpos($path, '.')) {
            $pathArray = explode('.', $path);
            foreach ($pathArray as $key) {
                if (isset(self::$data[$key])) {
                    self::$data = self::$data[$key];
                }
            }
        } else {
            self::$data = self::$data[$path];
        }
        return self::$data;
    }
}