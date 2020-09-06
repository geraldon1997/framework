<?php
namespace App\Routes;

use App\Core\Route;

class Web
{
    public static function registerRoutes()
    {
        Route::get('/', 'home');
        Route::get('/about', 'about us');
        Route::get('/users/create', 'show create new user form');
        Route::post('/users/create', 'insert user to database');
    }
}