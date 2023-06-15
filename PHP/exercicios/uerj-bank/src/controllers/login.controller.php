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
            'userUseCase' => new UserUseCase()
        ];
    }

    function init()
    {
        router(
            'GET',
            '^/',
            function () {
                if(hasUserLogged()) redirect('dashboard');
                redirect('entrar');
            } ,
            false
        );

        router(
            'GET',
            '^/entrar',
            fn () => render(
                template: "login",
                data: array('title' => 'Entrar'),
                noWrapper: true
            ),
            false
        );

        router(
            'POST',
            '^/entrar',
            function () {
                try {
                    extract(inputUserDTO($_POST));
                    $this->useCases['userUseCase']->autenticate($email, $password);
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
