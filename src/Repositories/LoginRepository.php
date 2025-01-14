


<?php


class LoginRepository{

    private PDO $pdo;
    private LoginMapper $login;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->login = new LoginMapper();
    }


        public function insert($username){
            

        }


}