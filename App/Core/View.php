<?php
namespace App\Core;

use App\Core\Configuration;

class View
{
    public static $page;

    public static function make(string $page, array $data = null)
    {
        self::$page = $page;

        ob_start(function () {return self::getPage(); });
        ob_end_flush();
    }

    public static function getPage()
    {
        Configuration::loadConfig('filesystem');
        $viewFile = '../'.Configuration::getConfig('views').self::$page.'.php';
        if (file_exists($viewFile)) {
            $file = file_get_contents($viewFile);
            return $file;
        }
    }
}
