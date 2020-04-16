<?php
namespace App\Foundation;

use App\Foundation\Config;

class View
{
    public static $config;

    public function __construct()
    {
        self::$config = Config::get('root.views');
    }

    public static function display($view)
    {
        $file = self::$config.$view.'.view.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }
}
