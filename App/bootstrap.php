<?php

use App\Core\Request;
use App\Core\Route;

require_once '../App/autoload.php';

new Route;

Route::register([
    'POST' => [],
    'GET' => [
        '/' => 'home',
        '/about' => 'about the framework'
    ]
]);
