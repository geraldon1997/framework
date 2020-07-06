<?php
namespace App\Controllers;

use App\Core\View;

class UserController
{
    public static function index()
    {
        $data = [
            'name' => 'mosco'
        ];
        View::make('users', $data);
    }
}