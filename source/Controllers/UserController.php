<?php

namespace Source\Controllers;
use Source\Classes\Controller;
use Source\Models\User;

class UserController extends User {

    public static function listAll() {
        $data = User::findAll();
        Controller::view("users", $data);
    }
}

?>