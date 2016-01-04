<?php

namespace StudentList\Core;

class Route {
    static function run() {
        $controllerName = "Main";
        $action = "index";

        var_dump($_SERVER['REQUEST_URI']);
    }
}