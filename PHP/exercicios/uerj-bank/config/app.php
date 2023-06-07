<?php

$appConfig = [
    'name' => 'uerj-bank',
    'url' => "http://localhost/uerj-bank/",
    'authFailEndpoint' => 'entrar',
    'userSessionKey' => 'user',
    'locale' => 'ptb',
    'path' => function ($path, $file) {
        $resolvePath = fn ($path) => $_SERVER['DOCUMENT_ROOT'] . "/" . APP_CONFIG['name'] . "/" . $path;
        $pathsAlias = [
            'src' => "/src/$file",
            'config' => "/config/$file",
            'bootstrap' => "/bootstrap/$file",
            'function' => "/src/functions/$file",
            'repository' => "/src/repositories/$file",
            'useCase' => "/src/useCases/$file",
            'controller' => "/src/controllers/$file",
            'view' => "/src/views/$file",
            'entity' => "/src/entities/$file",
            'dto' => "/src/dtos/$file"
        ];
        return $resolvePath($pathsAlias[$path]);
    }
];

define('APP_CONFIG', $appConfig);
