<?php

define("DATABASE", [
    "hostname" => "localhost",
    "database" => "php-mvc",
    "username" => "root",
    "password" => ""
]);

define("ROOT_DIR", explode("/", $_SERVER["REQUEST_URI"])[1]);

?>