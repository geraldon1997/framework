<?php

use App\Core\Configuration;
use App\Core\QueryBuilder;
use App\Core\Route;

require_once '../App/bootstrap.php';

// Route::resolve();
Configuration::loadConfig('filesystem');
Configuration::getConfig('views');
