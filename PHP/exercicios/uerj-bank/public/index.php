<?php
require_once __DIR__ . '/../bootstrap/app.php';

$controllers = [
    "controller" => [
        "dashboard.controller.php",
        "pix.controller.php",
        "bankStatement.controller.php",
        "openAccount.controller.php",
        "login.controller.php"
    ]
];

registerPackages($controllers);
header("HTTP/1.0 404 Not Found");
echo '{"error": "Página não encontrada."}';
