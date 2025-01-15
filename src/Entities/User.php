
<?php

class User
{
    private int $id;
    private string $username;


    public function __construct(int $id, string $username)
    {
        $this->id = $id;
        $this->username = $username;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function getId()
    {
        return $this->id;
    }
}
