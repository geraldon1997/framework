<?php
require_once 'vendor/autoload.php';

use App\Foundation\Route;

new Route;
Route::get('/', 'PageController@index');
Route::get('/test', 'PageController@test');
