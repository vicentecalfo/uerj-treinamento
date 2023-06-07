<?php

registerPackages([
    "repository" => [
        "account.repository.php",
    ],
    "entity" => [
        "account.entity.php"
    ]
]);

class AccountUseCase
{

    private $dependencies;

    function __construct()
    {
        $this->dependencies = [
            'accountRepository' => new AccountRepository()
        ];
    }

    function getByUserId($id)
    {
        return $this->dependencies['accountRepository']->findByUserId($id);
    }

    function debit($senderId, $recipientId, $amount){
        $accountData = $this->dependencies['accountRepository']->findByUserId($senderId);
        $senderBalance = $accountData['balance'];
        $dontHaveEnoughBalance = $senderBalance < $amount;
        if($dontHaveEnoughBalance)  throw new Exception('dontHaveEnoughBalance');
        return $this->dependencies['accountRepository']->debit( $accountData['id'], $senderBalance, $amount);
    }

}
