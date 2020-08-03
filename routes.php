<?php
use Source\Classes\Route;
use Source\Classes\Controller;
use Source\Controllers\UserController;

Route::set("/login", function() {
    // Controller::view("login", []);
    echo "login route";
});

Route::set("/", function() {
    echo "home route";
});

Route::set("/users", function() {
    UserController::listAll();
    // echo "users route";
});

Route::set("/users/create", function() {
    echo "users/create route";
});

?>