<?php 

namespace Source\Models;
use Source\Models\Database;

class User extends Database {

    public static function findAll() {
        
        try {
            $sql = "SELECT * FROM users";
			$stmt = parent::connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
        }
        
    }

    public function test() {
        echo "ok";
    }
}



?>