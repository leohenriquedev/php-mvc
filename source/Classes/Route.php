<?php

namespace Source\Classes;

class Route {
    
    public static function set($method, $route, $callback) {

        $request = str_replace("/" . ROOT_DIR, "", $_SERVER["REQUEST_URI"]);
        
        if($request == ("/api".$route) && $_SERVER["REQUEST_METHOD"] == $method) {
            $callback->__invoke();
        }
    }
}

?>