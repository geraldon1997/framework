<?php
namespace App\Core;

use App\Routes\Web;

class Application
{
    public static function run()
    {
        Web::registerRoutes();
        echo Route::start();
    }
}