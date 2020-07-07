<?php

use App\Core\Configuration;
use App\Core\Request;
use App\Core\Route;

require_once '../App/autoload.php';

Configuration::loadConfigFile('database');
Configuration::getConfigData('test.tester');

Route::register([
    'GET' => [
        '/' => 'UserController@index'
    ],
    'POST' => [
        '/user/create' => 'create user'
    ]
]);

Route::resolve();