<?php

namespace Source\Classes;

class Route {
    public function set($method, $route, $callback) {

        $root_path = explode("/", $_SERVER["REQUEST_URI"])[1];
        $request = str_replace("/" . $root_path, "", $_SERVER["REQUEST_URI"]);
        
        if($request == $route && $_SERVER["REQUEST_METHOD"] == $method) {
            $callback->__invoke();
        }
    }
}

?>