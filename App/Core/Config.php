<?php
namespace App\Core;

class Config
{
    public static $file;
    public static $data;

    public static function loadConfig($file)
    {
        $configFile = 'App/Configs/'.$file.'.php';
        if (file_exists($configFile)) {
            self::$file = require_once $configFile;
        } else {
            echo 'config not found';
        }
    }

    public static function getFile($path)
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
            $pathArray = [$path];
            foreach ($pathArray as $key) {
                if (isset(self::$data[$key])) {
                    self::$data = self::$data[$key];
                }
            }
        }

        return self::$data;
    }
}
