<?php 

namespace Source\Models;
use Source\Models\Database;

class User extends Database {

    public static function insert($data) {
        try {
            $sql = "INSERT INTO users(name, age) VALUES(:name, :age)";
            $stmt = parent::connect()->prepare($sql);
            $stmt->execute($data);
        } catch(PDOException $ex) {
            echo "Error: ".$ex->getMessage();
        }
    }

    public static function findAll() {
        try {
            $sql = "SELECT * FROM users";
			$stmt = parent::connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return json_encode($result);

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
        }
    }

    public function test() {
        echo "ok";
    }
}



?>