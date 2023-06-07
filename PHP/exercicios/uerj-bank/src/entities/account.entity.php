<?php

class Account
{
    private $id;
    private $userId;
    private $number;
    private $digit;
    private $agency;
    private $balance;
    private $accountLimit;

    function __construct(
        $id = null,
        $userId,
        $number,
        $digit,
        $agency = 203,
        $balance,
        $accountLimit = 1000
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->number = $number;
        $this->digit = $digit;
        $this->agency = $agency;
        $this->balance = $balance;
        $this->accountLimit = $accountLimit;
    }

    function get()
    {
        return [
            "id" => $this->id,
            "userId" => $this->userId,
            "number" => $this->number,
            "digit" => $this->digit,
            "agency" => $this->agency,
            "balance" => $this->balance,
            "accountLimit" => $this->accountLimit
        ];
    }
}
