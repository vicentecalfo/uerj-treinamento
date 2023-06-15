<?php

registerPackages([
    "useCase" => [
        "account.useCase.php",
        "user.useCase.php"
    ],
    "dto" => [
        "account.dto.php",
        "pix.dto.php"
    ]
]);

class PixController
{
    private $useCases;

    function __construct()
    {
        $this->useCases = [
            'account' => new AccountUseCase(),
            'user' => new UserUseCase()
        ];
    }

    function init()
    {
        router(
            'GET',
            '^/pix/pagar',
            function () {
                $allUsers = $this->useCases['user']->getAll();
                render(
                    template: "pix/pagar",
                    data: array('users' => $allUsers, 'me' => $_SESSION[APP_CONFIG['userSessionKey']])
                );
            },
            true
        );

        router(
            'GET',
            '^/pix/favoritos',
            fn () => render(
                template: "pix/favoritos",
                data: array('title' => 'Dashboard')
            ),
            true
        );

        router(
            'POST',
            '^/pix/pagar',
            function () {
                $error = null;
                $allUsers = null;
                try{
                    $allUsers = $this->useCases['user']->getAll();
                    extract(inputPixDTO($_POST));
                    $user = $_SESSION[APP_CONFIG['userSessionKey']];
                    $debitTransactionData = $this->useCases['account']->debit($user['id'],  $recipientId, $amount, 'OUTCOME_PIX');
                    $creditTransactionData = $this->useCases['account']->credit($recipientId, $user['id'], $amount, 'INCOME_PIX');
                }catch(Exception $error){
                    $error = $error->getMessage();
                }finally{
                    render(
                        template: "pix/pagar",
                        data: array('error' => $error, 'users' => $allUsers, 'me' => $_SESSION[APP_CONFIG['userSessionKey']])
                    );
                }
            },
            true
        );
    }
}

(new PixController())->init();
