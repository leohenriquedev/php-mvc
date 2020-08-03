<?php

namespace Source\Classes;

class Controller {

    public function view($view, $data) {
        require_once $_SERVER['DOCUMENT_ROOT']."/php-mvc/source/Views/".$view.".php";
    }

    public function redirect($route) {
        $root_path = explode("/", $_SERVER["REQUEST_URI"])[1];
        header("location: /{$root_path}{$route}");
    }
}

?>