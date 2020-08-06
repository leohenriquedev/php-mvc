<?php
use Source\Classes\Route;
use Source\Classes\Controller;

// Controllers
use Source\Controllers\UserController;

// System Routes
Route::set("GET", "/login", false, function() {
    Controller::view("system/login", []);
});

Route::set("GET", "/forgot", false, function() {
    // Controller::view("home", []);
});

Route::set("GET", "/", true, function() {
    Controller::view("home", []);
});

// User Routes
Route::set("GET", "/users", true, function() {
    UserController::listAll();
});
Route::set("GET", "/users/new", true, function() {
    Controller::view("user/new", []);
});
Route::set("POST", "/users/create", true, function() {
    UserController::create();
});

?>