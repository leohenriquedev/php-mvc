<?php

namespace Source\Classes;
use Source\Classes\Controller;
use Source\Classes\AuthJWT;

class Route {
    
    public static function set($method, $route, $verify, $callback) {

        $request = str_replace("/" . BASE_DIR, "", $_SERVER["REQUEST_URI"]);
        
        if($request == (BASE_API.$route) && $_SERVER["REQUEST_METHOD"] == $method) {

            if($verify) {
                $authJWT = AuthJWT::verify(getallheaders());

                if($authJWT["auth"]) {
                    $callback->__invoke();
                }
                else {
                    echo json_encode([
                        "auth" => $authJWT["auth"],
                        "message" => $authJWT["message"]
                    ]);
                }
            }
            else {
                $callback->__invoke();
            }
        }
    }

}

?>