<?php

class User
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    function __construct(
        $firstName,
        $lastName,
        $email,
        $password,
        $id = null
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    function get()
    {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'id' => $this->id
        ];
    }
}
