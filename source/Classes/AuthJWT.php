<?php

namespace Source\Classes;
use Firebase\JWT\JWT;

class AuthJWT {

    private static $token;

    public static function generate($id) {
        // PUT $id in JWT_KEY
        self::$token = JWT::encode(JWT_PAYLOAD, JWT_KEY);
        return self::$token;
    }

    public static function verify($headers) {

        $token_session = TOKEN_TEST;
        if(isset($token_session) && isset($headers["Authorization"])) {

            self::$token = TOKEN_TEST;
            $authorization = "Bearer ".self::$token;

            if($authorization == $headers["Authorization"]) {
                $response = [
                    "auth" => true,
                    "message" => "The provided token is correct!"
                ];
            }
            else {
                $response = [
                    "auth" => false,
                    "message" => "The provided token is incorrect!"
                ];
            }
        }
        else {
            $response = [
                "auth" => false,
                "message" => "No token was provided!"
            ];
        }

        return $response;

    }
}

?>