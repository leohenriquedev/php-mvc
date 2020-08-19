<?php

namespace Source\Models;
use Source\Models\Database;
use Source\Classes\Controller;
use Source\Classes\AuthJWT;

class Session extends Database {

    public static function logIn($data) {

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = parent::connect()->prepare($sql);
        $stmt->bindParam(":username", $data["username"], \PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if(count($result) > 0 && password_verify($data["password"], $result["password"])) {
            $_SESSION["name"] = $result["name"];
            $_SESSION["age"] = $result["age"];
            $_SESSION["token"] = AuthJWT::generate($result["id"]);
            return true;
        }
    }

    public static function logOut() {
        session_destroy();
        return true;
    }

}



?>