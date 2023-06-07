<?php

registerPackages([
    "useCase" => [
        "account.useCase.php"
    ]
]);

class PixUseCase
{

    private $dependencies;

    function __construct()
    {
        $this->dependencies = [
            'accountUseCase' => new AccountUseCase()
        ];
    }

    function send($senderId, $recipientId, $amount)
    {

        return $this->dependencies['accountUseCase']->debit($senderId, $recipientId, $amount);
    }
}
