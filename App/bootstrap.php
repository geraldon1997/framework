<?php

use App\Core\Request;
use App\Core\Route;

require_once '../App/autoload.php';

new Route;

Route::register([
    'GET' => [
        '/' => 'home',
        '/about' => 'about the framework'
    ],
    'POST' => [
        '/user/create' => 'create a user'
    ]
]);
