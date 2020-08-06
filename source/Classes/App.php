<?php

namespace Source\Classes;
use Source\Classes\Controller;

class App {

    public static function init() {

        // Controller::view("includes/header", ["title" => "php-mvc"]);
        require_once $_SERVER['DOCUMENT_ROOT'] . "/". BASE_DIR . "/routes.php";
        // Controller::view("includes/footer", []);

    }
    
}


?>