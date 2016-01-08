<?php

namespace StudentList;

class Router {

    public function run() {
        $controllerName = "Front";
        $action = "index";

        $routes = explode('/', $this->getURI());

        if ( !empty($routes[1]) ) {
            $controllerName = $routes[1]."Controller";
        }

        if (!empty($routes[2])) {
            $action = $routes[2];
        }

        $controllerFile = ucfirst($controllerName).".php";
        $contollerPath = __DIR__."/Controllers/".$controllerFile.".php";

        if (file_exists($contollerPath)) {
            require_once $controllerName;
        }

        $controller = new $controllerFile;

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