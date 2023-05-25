<?php

class municipioRepository
{

    private $municipios;

    function __construct()
    {
        $this->municipios = file_get_contents(__DIR__ . '/../../db/municipios.json');
    }

    function all()
    {
        return $this->municipios;
    }

    function findByUF($uf)
    {
        $uf = strtoupper($uf);
        $municipios = json_decode($this->municipios);
        $municipiosFiltered = array_filter(
            $municipios,
            fn ($municipio) =>
            $municipio->microrregiao->mesorregiao->UF->sigla === $uf
        );
        return "[" . join(",", array_map(fn ($row) => json_encode($row, JSON_UNESCAPED_UNICODE), $municipiosFiltered)) . "]";
        //return json_encode($municipiosFiltered);
    }
}
