<?php

require_once __DIR__ . '/../src/useCases/dashboard.controller.php';
require_once __DIR__ . '/../src/useCases/pix.controller.php';
require_once __DIR__ . '/../src/useCases/bankStatement.controller.php';

header("HTTP/1.0 404 Not Found");
echo '{"error": "Página não encontrada."}';
