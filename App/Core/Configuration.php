<?php
namespace App\Core;

class Configuration
{
    public static $file;
    public static $data;
    public static $default;

    public static function loadConfig(string $configFile)
    {
        self::$file = require_once '../App/Configs/'.$configFile.'.php';
    }

    public static function getConfig(string $page, $default = null)
    {
        self::$default = $default;
        $segments = explode('.', $page);
        self::$data = self::$file;

        foreach ($segments as $segment) {
            if (isset(self::$data[$segment])) {
                self::$data = self::$data[$segment];
            } else {
                self::$data = self::$default;
                break;
            }
        }
        return self::$data;
    }
}
