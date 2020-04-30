<?php
namespace App\Core;

class Config
{
    public static $file;
    public static $data;

    public static function loadConf($file)
    {
        $fileName = 'App/Configs/'.$file.'.php';
        if (file_exists($fileName)) {
            self::$file = require_once $fileName;
        }
    }

    public static function getConf($file, $conf)
    {
        self::loadConf($file);
        self::$data = self::$file;

        if (strpos($conf, '.')) {
            $confArray = explode('.', $conf);
            foreach ($confArray as $key) {
                if (isset(self::$data[$key])) {
                    self::$data = self::$data[$key];
                }
            }
        } else {
            $confArray = [$conf];
            foreach ($confArray as $key) {
                if (isset(self::$data[$key])) {
                    self::$data = self::$data[$key];
                }
            }
        }
        return self::$data;
    }
}
