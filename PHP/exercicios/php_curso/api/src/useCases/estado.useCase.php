<?php
require_once __DIR__ . '\..\repositories\estado.repository.php';

class estadoUseCase
{

    private $repository;

    function __construct()
    {
        $this->repository = new estadoRepository();
    }

    function all()
    {
        return $this->repository->all();
    }
}
