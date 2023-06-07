<?php

registerPackages([
    "useCase" => [
        "user.useCase.php",
    ]
]);

class LoginController
{
    private $useCases;

    function __construct()
    {
        $this->useCases = [
            'user' => new UserUseCase()
        ];
    }

    function init()
    {
        router(
            'GET',
            '^/entrar',
            fn () => render(
                template: "login",
                data: array('title' => 'Dashboard'),
                noWrapper: true
            ),
            false
        );

        router(
            'POST',
            '^/entrar',
            function () {
                try {
                    extract($_POST);
                    $this->useCases['user']->autenticate($email, $password);
                    redirect('dashboard');
                } catch (Exception $error) {
                    render(
                        template: "login",
                        data: array('error' => $error->getMessage()),
                        noWrapper: true
                    );
                }
            },
            false
        );

        router(
            'GET',
            '^/sair',
            fn () => unsetUserSession()
        );
    }
}

(new LoginController())->init();
