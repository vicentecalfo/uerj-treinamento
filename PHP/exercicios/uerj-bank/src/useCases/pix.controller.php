<?php
require_once __DIR__ . '/../functions.php';


router(
    'GET',
    '^/pix/pagar',
    fn() => includeWithVariables("pix/pagar", array('title' => 'Dashboard'))
);

router(
    'GET',
    '^/pix/favoritos',
    fn() => includeWithVariables("pix/favoritos", array('title' => 'Dashboard'))
);

