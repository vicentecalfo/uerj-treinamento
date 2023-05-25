<?php

require_once __DIR__ . '/../functions.php';
require_once __DIR__ . '/municipio.useCase.php';

$municipio = new municipioUseCase();

router(
    'GET',
    '^/municipios$',
    function () use ($municipio) {
        echo $municipio->all();
    }
);

router('GET', '^/municipios/(?<uf>[a-zA-Z0-9]+)$', function ($params) use ($municipio) {
    echo $municipio->findByUF($params['uf']);
});
