<?php

registerPackages([
    "function" => [
        "Database.php",
    ]
]);

class TransactionRepository
{

    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function findByUserId($id)
    {
        $result =  $this->db->query("SELECT * FROM transaction WHERE userId=$id ORDER BY date DESC");
        return $result ? $result : [];
    }

}


