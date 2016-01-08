<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use StudentList\Router as Router;

require_once __DIR__.'/../app/bootstrap.php';

$router = new Router();

$router->run();