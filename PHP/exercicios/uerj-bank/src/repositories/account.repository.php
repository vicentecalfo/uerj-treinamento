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

    function credit($accountId, $balance, $amount){
        $newBalance = $balance + $amount;
        $newData = $this->db->query("UPDATE account SET balance=:newBalance WHERE id=:accountId",[
            'newBalance' => $newBalance,
            'accountId' =>$accountId
        ]);
        return $newData;
    }

    function setTransaction($userId, $recipient, $amount, $type){
        $date = date("Y-m-d h:i:s");
        $newData = $this->db->query("INSERT INTO transaction (userId, source, amount, date, type) VALUES (:userId, :source, :amount, :date, :type)",
            [
                "userId" => $userId,
                "source" => $recipient,
                "amount" => $amount,
                "type" => $type,
                "date" => strtotime($date)
            ]);
        return $newData;
    }

    function create($userId){
        $newData = $this->db->query("INSERT INTO account (userId, number, digit, agency, balance, accountLimit) VALUES (:userId, :number, :digit, :agency, :balance, :accountLimit)",
            [
                "userId" => $userId,
                "number" => $userId,
                "digit" => 2,
                "agency" => 203,
                "balance" => 80000,
                "accountLimit" => 1000
            ]);
        return $newData;
    }

}
