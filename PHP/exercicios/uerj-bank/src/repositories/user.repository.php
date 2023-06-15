<?php

registerPackages([
    "function" => [
        "Database.php",
    ]
]);

class UserRepository
{

    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function findById($id)
    {
        $result =  $this->db->query("SELECT * FROM user WHERE id=$id");
        return $result ? $result[0] : null;
    }

    function findByEmail($email)
    {
        $result =  $this->db->query("SELECT * FROM user WHERE email=:email LIMIT 1", [
            ':email' => $email
        ]);
        return is_null($result) || count($result) === 0 ? null : $result[0];
    }

    function findAll(){
        return $this->db->query("SELECT * FROM user");
    }

    function create($firstName, $lastName, $email, $password){
        $newUser = $this->db->query("INSERT INTO user (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)",[
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "password" => $password
        ]);
        return $newUser;
    }
}
