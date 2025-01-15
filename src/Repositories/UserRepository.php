<?php
class UserRepository extends AbstractRepository {


   final public function __construct(){
        parent::__construct();
    }

    public function findByUsername(string $username): ?User {

        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        $data = UserMapper::mapToObject($data);
        return $data;
    }


    public function createUser(string $username): void {

        $stmt = $this->pdo->prepare("INSERT INTO user (username) VALUES (:username)");
        $stmt->execute(['username' => $username]);


    }


}