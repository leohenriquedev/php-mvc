<?php

namespace Source\Classes;

class Controller {

    public static function view($view, $data) {
        require_once $_SERVER['DOCUMENT_ROOT']."/php-mvc/source/Views/".$view.".php";
    }

    public function redirect($route) {
        header("location: /". BASE_DIR ."{$route}");
    }

}

?>