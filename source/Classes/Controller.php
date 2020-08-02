<?php

namespace Source\Classes;

class Controller {

    public function view($view, $data) {
        require_once $_SERVER['DOCUMENT_ROOT']."/php-mvc/source/Views/".$view.".php";
    }
}

?>