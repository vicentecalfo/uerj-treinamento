<?php

registerPackages([
    "useCase" => [
        "account.useCase.php",
    ],
    "dto"=>[
        "account.dto.php"
    ]
]);


class DashboardController
{
    private $useCases;

    function __construct()
    {
        $this->useCases = [
            'account' => new AccountUseCase()
        ];
    }

    function init()
    {
        router(
            'GET',
            '^/dashboard',
            function () {
                $user = $_SESSION[APP_CONFIG['userSessionKey']];
                $accountData = outputAccountDTO($this->useCases['account']->getByUserId($user['id']));
                render(
                    template: 'dashboard',
                    data: array('account' => $accountData, 'user' => $user)
                );
            },
            true
        );
    }
}

(new DashboardController())->init();
