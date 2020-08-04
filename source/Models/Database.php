<?php

namespace Source\Models;

class Database {

    protected static $pdo;

    public static function connect() {
        try {
            if (is_null(self::$pdo)) {
              $pdo = new \PDO("mysql:host=".DATABASE["hostname"].";dbname=".DATABASE["database"], DATABASE["username"], DATABASE["password"]);
            }
            return $pdo;

          } catch(PDOException $ex) {
            echo "Error: ".$ex->getMessage();
          }
    }

}


?>