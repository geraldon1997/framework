<?php
namespace App\Controllers;

use App\Core\View;

class UserController
{
    public static function test()
    {
        return 'hello world';
    }

    public static function index()
    {
        View::make('test');
    }
}