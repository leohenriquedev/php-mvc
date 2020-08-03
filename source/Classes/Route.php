<?php

namespace Source\Classes;

class Route {
    private static $route = [];

    public static function set($route, $callback) {

        $root_path = explode("/", $_SERVER["REQUEST_URI"])[1];
        $request = str_replace("/" . $root_path, "", $_SERVER["REQUEST_URI"]);
        
        if($request == $route) {
            $callback->__invoke();
        }
    }
}

?>