<?php

function salvarCookie(
    $name,
    $value = "",
    $expires = 0,
    $path = "",
    $domain = "",
    $secure = false,
    bool $httponly = false,
) {
    echo $name;
    echo PHP_EOL;
    echo $value;
    echo PHP_EOL;
    $expires = time() + 60 * 60 * 2;
    echo $expires;
    echo PHP_EOL;
    echo $path;
    echo PHP_EOL;
    echo $domain;
    echo PHP_EOL;
    echo $secure ? 'seguro' : 'inseguro';
    echo PHP_EOL;
    echo $httponly ? 'sim' : 'não';
}


salvarCookie(
    name: 'teste',
    path: '/folder',
    secure: true,
    value: '12345',
    domain: 'www.inovuerj.sr2.uerj.br'
);
