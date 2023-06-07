<?php

require_once __DIR__ . '/../config/app.php';

function registerPackages($packages)
{
    foreach(array_keys($packages) as $path){
        $register = fn ($path) => array_map(fn ($filename) => APP_CONFIG['path']($path, $filename), $packages[$path]);
        foreach ($register($path) as $fullPath) {
            require_once $fullPath;
        }
    }
}

$globalPackages = [
    "function" => [
        "auth.php",
        "router.php",
        "render.php",
        "currency.php",
        "date.php"
    ]
];

session_start();
setlocale(LC_ALL, APP_CONFIG['locale']);
registerPackages($globalPackages);
