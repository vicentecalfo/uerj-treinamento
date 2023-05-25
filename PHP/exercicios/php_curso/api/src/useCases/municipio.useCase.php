<?php
require_once __DIR__ . '\..\repositories\municipio.repository.php';

class municipioUseCase
{

    private $repository;

    function __construct()
    {
        $this->repository = new municipioRepository();
    }

    function all()
    {
        return $this->repository->all();
    }

    function findByUF($uf)
    {
        return $this->repository->findByUF($uf);
    }
}
