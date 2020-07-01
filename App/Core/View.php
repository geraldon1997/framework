<?php
namespace App\Core;

use App\Core\Configuration;

class View
{
    public static function make(string $page)
    {
        Configuration::loadConfig('filesystem');
        Configuration::getConfig($page);
    }
}
