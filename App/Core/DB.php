<?php
namespace App\Core;

use mysqli;
use App\Core\Config;

class Db
{
    public static $host;
    public static $user;
    public static $pass;
    public static $db;

    public static function params()
    {
        self::$host = Config::getConf('database', 'driver.mysql.host');
        self::$user = Config::getConf('database', 'driver.mysql.user');
        self::$pass = Config::getConf('database', 'driver.mysql.pass');
        self::$db = Config::getConf('database', 'driver.mysql.db');
    }

    public static function connect()
    {
        return new mysqli(self::$host, self::$user, self::$pass, self::$db);
    }

    public static function init()
    {
        self::params();
        return self::connect();
    }
}
