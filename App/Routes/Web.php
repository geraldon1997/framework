<?php
namespace App\Routes;

use App\Core\Route;

class Web
{
    public static function registerRoutes()
    {
        Route::view('/', 'welcome');
        Route::get('/about', 'about us');
        Route::get('/users/create', 'show create new user form');
        Route::post('/users/create', 'insert user to database');
        Route::get('/users/delete', 'UserController@delete');
        Route::get('/contact', 'Contact@show');
    }
}