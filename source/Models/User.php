<?php 

namespace Source\Models;
use Source\Models\Database;

class User extends Database {

    public function findAll() {
        // try {
        //     $sql = "SELECT * FROM users";
            
		// 	$stmt = $this->connect()->prepare($sql);
		// 	$stmt->execute();
		// 	return $stmt->fetchAll(PDO::FETCH_ASSOC);

		// } catch(PDOException $ex){
		// 	echo "Error: ".$ex->getMessage();
        // }
        
        return [
            "name" => "Leonardo",
            "age" => 22
        ];
        
    }

    public function test() {
        echo "ok";
    }
}



?>