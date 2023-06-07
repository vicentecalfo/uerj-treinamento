<?php

registerPackages([
    "repository" => [
        "user.repository.php",
    ],
    "entity" => [
        "user.entity.php"
    ],
    "dto" =>[
        "user.dto.php"
    ]
]);

class UserUseCase
{

    private $dependencies;

    function __construct()
    {
        $this->dependencies = [
            'userRepository' => new UserRepository()
        ];
    }

    function getById($id)
    {
        return $this->dependencies['userRepository']->findById($id);
    }

    function autenticate($email, $password)
    {
        $email = empty($email) ? false : addslashes((trim($email)));
        $password = empty($password) ? false : md5(trim($password));
        $emptyEmailOrPassword = !$email || !$password;
        if ($emptyEmailOrPassword) throw new Exception('errorEmptyField');

        $user = $this->dependencies['userRepository']->findByEmail($email);

        $userDoesntExist = $user === null;
        if ($userDoesntExist) throw new Exception('errorEmailDoesntExist');

        $passwordIncorrect = strcmp($password, $user['password']);
        if ($passwordIncorrect) throw new Exception('errorPasswordIncorrect');

        setUserSession(outputUserDTO($user));
    }

    function getByEmail($email){
        return $this->dependencies['userRepository']->findByEmail($email);
    }
}
