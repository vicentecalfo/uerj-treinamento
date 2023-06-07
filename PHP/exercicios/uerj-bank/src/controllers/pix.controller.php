<?php

registerPackages([
    "useCase" => [
        "account.useCase.php",
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
            'account' => new AccountUseCase()
        ];
    }

    function init()
    {
        router(
            'GET',
            '^/pix/pagar',
            fn () => render(
                template: "pix/pagar",
                data: array('title' => 'Dashboard')
            ),
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
                extract(inputPixDTO($_POST));
                $user = $_SESSION[APP_CONFIG['userSessionKey']];
                $accountData = $this->useCases['account']->debit($user['id'],  $recipientId, $amount);
                render(
                    template: "pix/pagar",
                    data: array('title' => 'Dashboard')
                );
            },
            true
        );
    }
}

(new PixController())->init();
