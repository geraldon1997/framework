<?php
require_once 'vendor/autoload.php';

use App\Foundation\Route;

new Route;
Route::get('/', 'User@index');
Route::get('/test', 'UserController@index');
