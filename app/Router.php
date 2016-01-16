<?php
namespace StudentList;

class Router {

   
    public function run() {
        $controllerName = "Base";
        $action = "index";

        $routes = explode('/', $this->getURI());

        if ( !empty($routes[1]) ) {
            $controllerName = $routes[1];
        }

        $controllerName = sprintf('%s\%s\%s%s', __NAMESPACE__, 'Controllers', ucfirst(strtolower($controllerName)), 'Controller');

        if (!empty($routes[2])) {
            $action = $routes[2];
        }
        $controller = new $controllerName;
        $action = $action."Action";

        if (class_exists($controllerName) && method_exists($controllerName, $action)) {
            $controller = new $controllerName;
            $controller->$action();
        } else {
            $this->get404();
        }

    }

    public function getURI() {
        return $_SERVER['REQUEST_URI'];
    }    

    public function get404() {
        header('HTTP/1.0 404 Not Found');
        echo "<h1>404 Not Found</h1>";
        echo "The page that you have requested could not be found.";
        exit();        
    }


}