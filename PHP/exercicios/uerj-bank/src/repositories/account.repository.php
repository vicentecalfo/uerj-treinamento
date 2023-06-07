<?php

registerPackages([
    "function" => [
        "Database.php",
    ]
]);

class AccountRepository
{

    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function findByUserId($id)
    {
        $result =  $this->db->query("SELECT * FROM account WHERE userId=$id");
        return $result ? $result[0] : null;
    }

    function debit($accountId, $balance, $amount){
        $newBalance = $balance - $amount;
        $newData = $this->db->query("UPDATE account SET balance=:newBalance WHERE id=:accountId",[
            'newBalance' => $newBalance,
            'accountId' =>$accountId
        ]);
        return $newData;
    }

}
