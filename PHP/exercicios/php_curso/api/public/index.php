<?php

require_once __DIR__ . '/../src/useCases/estado.controller.php';
require_once __DIR__ . '/../src/useCases/municipio.controller.php';

header("HTTP/1.0 404 Not Found");
echo '{"error": "Página não encontrada."}';
