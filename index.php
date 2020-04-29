<?php
require_once 'autoload.php';

use App\Core\Route;

Route::get('/', 'UserController@index');
