<?php 

namespace Source\Models;
use Source\Models\Database;

class User extends Database {

    public static function insert($data) {
        try {
            $sql = "INSERT INTO users(name, age, username, password) VALUES(:name, :age, :username, :password)";
            $stmt = parent::connect()->prepare($sql);

            $usernameArray = explode(" ", $data["name"]);
            $username = strtolower($usernameArray[0] . "." . array_pop($usernameArray));
            $password_hash = password_hash($data["password"], PASSWORD_DEFAULT);

            $stmt->bindParam(":name", $data["name"], \PDO::PARAM_STR);
            $stmt->bindParam(":age", $data["age"], \PDO::PARAM_INT);
            $stmt->bindParam(":username", $username, \PDO::PARAM_STR);
            $stmt->bindParam(":password", $password_hash, \PDO::PARAM_STR);
            $stmt->execute();
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
			return $result;

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
        }
    }

    public static function findBy($id) {
        try {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = parent::connect()->prepare($sql);
            $stmt->bindParam(":id", $id, \PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($result);

        } catch (PDOException $ex) {
            echo "Error: ".$ex->getMessage();
        }
    }

    public static function edit($data) {
        try {
            $sql = "UPDATE users SET name = :name, age = :age WHERE id = :id";
            $stmt = parent::connect()->prepare($sql);
            $stmt->bindParam(":id", $data["name"], \PDO::PARAM_STR);
            $stmt->bindParam(":id", $data["age"], \PDO::PARAM_INT);
            $stmt->bindParam(":id", $data["id"], \PDO::PARAM_INT);
            $stmt->execute();

        } catch (PDOException $ex) {
            echo "Error: ".$ex->getMessage();
        }
    }

    public static function delete($id) {
        try {
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = parent::connect()->prepare($sql);
            $stmt->bindParam(":id", $id, \PDO::PARAM_INT);
            $stmt->execute();

        } catch (PDOException $ex) {
            echo "Error: ".$ex->getMessage();
        }
    }

}



?>