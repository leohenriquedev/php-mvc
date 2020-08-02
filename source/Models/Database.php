<?php

namespace Source\Models;

class Database {

    private $hostname;
    private $database;
    private $username;
    private $password;
    protected static $pdo;

    public function __construct() {
        $this->hostname = "localhost";
        $this->database = "php-mvc";
        $this->username = "leonardo";
        $this->password = "";
    }


    public function connect() {
        try {
			if (is_null(self::$pdo)) {
				self::$pdo = new PDO("mysql:host={$this->hostname};dbname={$this->database}", $this->username, $this->password);
			}
			return self::$pdo;
			
		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM users";
            
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
        
    }

    public function test() {
        
		echo "ok";
        
    }
}

// $database = new Database;
// var_dump($database->findAll());


?>