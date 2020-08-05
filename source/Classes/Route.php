<?php

namespace Source\Classes;
use Source\Classes\Controller;
use Source\Classes\AuthJWT;

class Route {
    
    public static function set($method, $route, $verifyJWT, $callback) {

        $request = str_replace("/" . ROOT_DIR, "", $_SERVER["REQUEST_URI"]);
        
        if($request == (BASE_API.$route) && $_SERVER["REQUEST_METHOD"] == $method) {
            if($verifyJWT) {
                if(AuthJWT::verify(TOKEN_TEST)) {
                    $callback->__invoke();
                }
                else {
                    return json_encode(["error" => "some error"]);
                }
            }
            else {
                $callback->__invoke();
            }
        }
    }

}

?>