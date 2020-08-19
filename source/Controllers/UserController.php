<?php

namespace Source\Controllers;
use Source\Classes\Controller;
use Source\Models\User;

class UserController extends User {

    public static function create() {
        User::insert($_POST);
        Controller::redirect("/users");
    }

    public static function listAll() {
        $data = User::findAll();
        Controller::view("user/all", $data);
    }

    public static function listBy() {
        $data = User::findBy(2);
        Controller::view("user/by", $data);
    }
}

?>