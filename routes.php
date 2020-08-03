<?php
use Source\Classes\Route;
use Source\Classes\Controller;
use Source\Controllers\UserController;

Route::set("GET", "/login", function() {
    // Controller::view("login", []);
    echo "login route";
});

Route::set("GET", "/", function() {
    echo "home route";
});

Route::set("GET", "/users", function() {
    UserController::listAll();
    // echo "users route";
});

Route::set("POST", "/users/create", function() {
    echo "users/create route";
});

?>