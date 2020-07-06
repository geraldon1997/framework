<?php

use App\Core\Configuration;

require_once '../App/autoload.php';

Configuration::loadConfigFile('database');
Configuration::getConfigData('test.tester');