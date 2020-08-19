<?php

namespace Source\Controllers;
use Source\Classes\Controller;
use Source\Models\Session;

class SessionController extends Session {

    public static function login() {

        if(Session::logIn($_POST)) {
            Controller::redirect("/users");
        }
        else {
            Controller::redirect("/");
        }
    }

    public static function logout() {
        
        if(Session::logOut()) {
            Controller::redirect("/");
        }
    }
}

?>