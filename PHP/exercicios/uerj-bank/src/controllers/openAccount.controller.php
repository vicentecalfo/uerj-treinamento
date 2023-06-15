<?php
registerPackages([
    "dto" =>[
        "user.dto.php"
    ],
    "useCase" => [
        "user.useCase.php",
        'account.useCase.php'
    ]
]);

class OpenAccountController
{
    private $useCases;

    function __construct()
    {
        $this->useCases = [
            'userUseCase' => new UserUseCase(),
            'accountUseCase' => new AccountUseCase()
        ];
    }

    function init()
    {
        router(
            'GET',
            '^/abrir-conta',
            fn () => render(
                template: "openAccount",
                data: array('title' => 'Dashboard'),
                noWrapper:true
            )
        );

        router(
            'POST',
            '^/abrir-conta',
            function(){
                extract(inputUserDTO($_POST));
                $this->useCases['userUseCase']->create(
                    $firstName,
                    $lastName,
                    $email,
                    $password
                );
                $newUser =  $this->useCases['userUseCase']->getByEmail($email);
                $this->useCases['accountUseCase']->create($newUser['id']);
                render(
                    template: "accountOpened",
                    data: array(
                        'user' => $newUser
                    ),
                    noWrapper:true
                );
            }
        );
    }
}

(new OpenAccountController())->init();
