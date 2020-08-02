<?php

use App\Core\Application;
use App\Core\FileFinder;
use App\Core\Route;
use App\Core\View;

require_once "vendor/autoload.php";

$app = new Application();

$app->route->get('/', 'HomeController@index');

$app->run();
