<?php
namespace App\Controllers;

use App\Foundation\View;

class Controller
{
    public function __construct()
    {
        new View;
    }

    public static function view($view)
    {
        View::display($view);
    }
}
