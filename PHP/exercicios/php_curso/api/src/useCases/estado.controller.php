<?php

require_once __DIR__ . '/../functions.php';
require_once __DIR__ . '/estado.useCase.php';

$estado = new estadoUseCase();

router(
    'GET',
    '^/estados$',
    function () use ($estado) {
        echo $estado->all();
    }
);
