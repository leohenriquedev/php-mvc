<?php
session_start();
require_once "vendor/autoload.php";
use Source\Classes\Controller;

Controller::view("includes/header", ["title" => "php-mvc"]);
require_once "routes.php";
Controller::view("includes/footer", []);

?>