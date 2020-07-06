<?php
namespace App\Core;

use App\Core\Configuration;

class View
{
    public static $page;
    public static $data;

    public static function make(string $page, array $data = null)
    {
        self::$page = $page;
        self::$data = $data;

        ob_start(function () {return self::getPage(self::$data); });
        ob_end_flush();
    }

    public static function getPage($data)
    {
        Configuration::loadConfig('filesystem');
        $viewFile = '../'.Configuration::getConfig('views').self::$page.'.php';
        if (file_exists($viewFile)) {
            $file = file_get_contents($viewFile);
            return $file;
        }
    }
}
