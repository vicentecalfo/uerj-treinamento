<?php

registerPackages([
    "useCase" =>[
        "user.useCase.php"
    ],
    "repository" => [
        "account.repository.php"
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
            'accountRepository' => new AccountRepository(),
            'userUseCase' => new UserUseCase()
        ];
    }

    function getByUserId($id)
    {
        return $this->dependencies['accountRepository']->findByUserId($id);
    }

    function debit($senderId, $recipientId, $amount, $type){
        $accountData = $this->dependencies['accountRepository']->findByUserId($senderId);
        $senderBalance = $accountData['balance'];
        $dontHaveEnoughBalance = $senderBalance < $amount;
        if($dontHaveEnoughBalance)  throw new Exception('dontHaveEnoughBalance');
        $this->dependencies['accountRepository']->debit( $accountData['id'], $senderBalance, $amount);
        $recipientUserData = $this->dependencies['userUseCase']->getById($recipientId);
        $debitTransactionData = $this->dependencies['accountRepository']->setTransaction($senderId,  $recipientUserData['fullName'], $amount, $type);
        return $debitTransactionData;
    }

    function credit($recipientId, $senderId, $amount, $type){
        $accountData = $this->dependencies['accountRepository']->findByUserId($recipientId);
        $this->dependencies['accountRepository']->credit( $accountData['id'],  $accountData['balance'], $amount);
        $senderUserData = $this->dependencies['userUseCase']->getById($senderId);
        $creditTransactionData = $this->dependencies['accountRepository']->setTransaction($recipientId,  $senderUserData['fullName'], $amount, $type);
        return $creditTransactionData;
    }

    function create($userId){
        $this->dependencies['accountRepository']->create($userId);
    }

}
