<?php

use App\Core\Route;

require_once '../App/autoload.php';

new Route;

Route::register([
    'POST' => [
        '/user/create' => 'createUser'
    ],
    'GET' => [
        '/' => 'home'
    ]
]);