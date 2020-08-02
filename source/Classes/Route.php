<?php

namespace Source\Classes;

class Route {
    private static $route = [];

    public static function set($route, $callback) {
        // self::$route[] = $route;

        if($_GET["url"] == $route) {
            $callback->__invoke();
        }
    }
}

?>