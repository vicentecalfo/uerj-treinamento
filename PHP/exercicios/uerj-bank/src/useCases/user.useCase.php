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
        return outputUserDTO($this->dependencies['userRepository']->findById($id));
    }

    function autenticate($email, $password)
    {
        $email = empty($email) ? false : addslashes((trim($email)));
        $password = empty($password) ? false : $password;
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
        return outputUserDTO($this->dependencies['userRepository']->findByEmail($email));
    }

    function getAll(){
        $allUsers = $this->dependencies['userRepository']->findAll();
        $allUsers = array_map('outputUserDTO', $allUsers);
        return $allUsers;
    }

    function create($firstName, $lastName, $email, $password){
        $password = md5($password);
        $this->dependencies['userRepository']->create($firstName, $lastName, $email, $password);
    }
}
