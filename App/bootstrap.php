<?php

use App\Core\Request;
use App\Core\Route;

require_once '../App/autoload.php';

new Route;

Route::register([
    'GET' => [
        '/' => 'welcome',
        '/about' => 'about',
        '/users' => 'UserController@index'
    ],
    'POST' => [
        '/user/create' => 'create a user'
    ]
]);
