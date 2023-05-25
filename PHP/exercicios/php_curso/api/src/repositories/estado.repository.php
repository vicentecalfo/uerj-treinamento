<?php

class estadoRepository
{

    private $estados;

    function __construct()
    {
        $this->estados = file_get_contents(__DIR__ . '/../../db/estados.json');
    }

    function all()
    {
        return $this->estados;
    }
}
