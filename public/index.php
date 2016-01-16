<?php

error_reporting(-1);

use StudentList\Router as Router;
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../app/bootstrap.php';

if ($development) {
    error_reporting(-1);
} else {
    error_reporting(0);
}

$router = new Router();

$router->run();