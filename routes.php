<?php
use Source\Classes\Route;
use Source\Classes\Controller;

// Controllers
use Source\Controllers\UserController;
use Source\Controllers\SessionController;

// System Routes
Route::set("GET", "/", false, function() {
    Controller::view("system/login", []);
});
Route::set("POST", "/login", false, function() {
    SessionController::login();
});

Route::set("POST", "/logout", false, function() {
    SessionController::logout();
});

// User Routes
Route::set("GET", "/users", true, function() {
    // UserController::listAll();
    UserController::listBy();
});


Route::set("GET", "/users/new", true, function() {
    Controller::view("user/new", []);
});
Route::set("POST", "/users/create", true, function() {
    UserController::create();
});

?>