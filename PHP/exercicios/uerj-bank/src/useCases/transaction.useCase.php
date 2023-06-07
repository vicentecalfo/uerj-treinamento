<?php

registerPackages([
    "repository" => [
        "transaction.repository.php",
    ],
    "entity" => [
        "transaction.entity.php"
    ]
]);

class TransactionUseCase
{

    private $dependencies;

    function __construct()
    {
        $this->dependencies = [
            'transactionRepository' => new TransactionRepository()
        ];
    }

    function getById($id)
    {
        return $this->dependencies['transactionRepository']->findByUserId($id);
    }

}


