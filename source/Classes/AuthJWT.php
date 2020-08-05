<?php

namespace Source\Classes;
use Firebase\JWT\JWT;

class AuthJWT {

    private static $token;

    public static function generate($id) {
        // PUT $id in JWT_KEY
        self::$token = JWT::encode(JWT_PAYLOAD, JWT_KEY);
        $_SESSION["token"] = self::$token;
    }

    public static function verify($token) {
        self::$token = JWT::encode(JWT_PAYLOAD, JWT_KEY);

        if(isset($token) && self::$token == $token) {
            return true;
        }
    }
}

?>