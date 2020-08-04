<?php
use Source\Classes\Route;
use Source\Classes\Controller;

// Controllers
use Source\Controllers\UserController;

// System Routes
Route::set("GET", "/login", function() {
    Controller::view("system/login", []);
});
Route::set("GET", "/", function() {
    Controller::view("home", []);
});

// User Routes
Route::set("GET", "/users", function() {
    UserController::listAll();
});
Route::set("GET", "/users/new", function() {
    Controller::view("user/new", []);
});
Route::set("POST", "/users/create", function() {
    UserController::create();
});

?>