<?php
namespace App\Core;

class Configuration
{
    public function __construct(string $configFile)
    {
        self::loadConfig($configFile);
    }
    
    public static function loadConfig(string $configFile)
    {
        //
    }

    public static function getConfig()
    {
        //
    }
}
