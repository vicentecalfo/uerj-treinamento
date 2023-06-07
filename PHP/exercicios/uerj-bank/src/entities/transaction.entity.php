<?php

class Transaction
{
    private $id;
    private $userId;
    private $source;
    private $amount;
    private $date;
    private $type;

    function __construct(
        $id = null,
        $userId,
        $source,
        $amount,
        $date,
        $type
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->source = $source;
        $this->amount = $amount;
        $this->date = $date;
        $this->type = $type;
    }

    function get()
    {
        return [
            "id" => $this->id,
            "userId" => $this->userId,
            "source" => $this->source,
            "amount" => $this->amount,
            "date" => $this->date,
            "type" => $this->type
        ];
    }
}