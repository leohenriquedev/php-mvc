<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

session_start();
require_once "vendor/autoload.php";
require_once "config.php";

use Source\Classes\App;

App::init();

?>