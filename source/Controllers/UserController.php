<?php

namespace Source\Controllers;
use Source\Classes\Controller;
use Source\Models\User;

class UserController extends User {

    public static function create() {
        // User::insert($_POST);
        // $data = User::findAll();
        // Controller::view("user/all", $data);
        Controller::redirect("/users");
    }

    public static function listAll() {
        $data = User::findAll();
        Controller::view("user/all", $data);
    }
}

?>