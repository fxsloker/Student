<?php

namespace StudentList;
class Router {

   
    public function run() {
        $controllerName = "Front";
        $action = "index";

        $routes = explode('/', $this->getURI());

        if ( !empty($routes[1]) ) {
            $controllerName = $routes[1];
        }

        $controllerName =  __NAMESPACE__ . '\\Controllers\\'.ucfirst(strtolower($controllerName))."Controller";

        if (!empty($routes[2])) {
            $action = $routes[2];
        }

        if (class_exists($controllerName) && method_exists($controllerName, $action)) {
            $controller = new $controllerName;
        } else {
            header('HTTP/1.0 404 Not Found');
            echo "<h1>404 Not Found</h1>";
            echo "The page that you have requested could not be found.";
            exit();
        }

    }

    public function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return $_SERVER['REQUEST_URI'];
        }
    }    
}