<?php
namespace App\Controllers;

use App\Core\View;

class Controller
{
    public static function view($file)
    {
        View::make($file);
    }
}
