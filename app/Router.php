<?php

namespace StudentList;
use StudentList\Controllers;
class Router {

   
    public function run() {
        $controllerName = "Front";
        $action = "index";

        $routes = explode('/', $this->getURI());

        if ( !empty($routes[1]) ) {
            $controllerName = $routes[1];
        }

        $controllerName =  __NAMESPACE__ . '\\Controllers\\'.ucfirst($controllerName)."Controller";

        if (!empty($routes[2])) {
            $action = $routes[2];
        }
        $controllerFile = $controllerName.".php";
        $controllerPath = __DIR__."/Controllers/".$controllerFile;

        if (file_exists($controllerPath)) {
            //require_once $controllerPath;
        }

        $controller = new $controllerName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } 
    }

    public function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return $_SERVER['REQUEST_URI'];
        }
    }    
}