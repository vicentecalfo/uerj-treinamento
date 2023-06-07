<?php

registerPackages([
    "useCase" => [
        "transaction.useCase.php",
    ],
    "dto" => [
        "transaction.dto.php"
    ]
]);

class BankStatementController
{
    private $useCases;

    function __construct()
    {
        $this->useCases = [
            'transaction' => new TransactionUseCase()
        ];
    }

    function init()
    {
        router(
            'GET',
            '^/extrato',
            function () {
                $user = $_SESSION[APP_CONFIG['userSessionKey']];
                $transactions = $this->useCases['transaction']->getById($user['id']);
                $transactions = array_map(fn($row) => outputTransactionDTO($row), $transactions);
                render(
                    template: 'bankStatement',
                    data: array('bankStatement' =>  $transactions),
                    customPath: "extrato"
                );
            },
            true
        );
    }
}

(new BankStatementController())->init();
