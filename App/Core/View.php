<?php
namespace App\Core;

use App\Core\Config;

class View
{
    public static $view;
    public static $layout;

    public static function init()
    {
        Config::loadConfig('routes');
        self::$view = Config::getFile('view');
        self::$layout = Config::getFile('layout');
    }

    public static function make($file, array $params = null)
    {
        self::init();
        $viewFile = self::$view.$file.'.php';

        if (file_exists($viewFile)) {
            $y = ['hi,', 'hello,', 'how are you,'];
            require_once $viewFile;
        } else {
            echo 'view not found';
        }
    }
}
