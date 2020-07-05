<?php

use App\Core\Request;
use App\Core\Route;

require_once '../App/autoload.php';

new Route;

Route::register([
    'GET' => [
        '/' => 'test',
        '/about' => 'about the framework',
        '/users' => 'UserController@index'
    ],
    'POST' => [
        '/user/create' => 'create a user'
    ]
]);
