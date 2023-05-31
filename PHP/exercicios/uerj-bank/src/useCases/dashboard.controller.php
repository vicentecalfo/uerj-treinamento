<?php
require_once __DIR__ . '/../functions.php';


router(
    'GET',
    '^/dashboard',
    fn() => includeWithVariables('dashboard', array('balance' => 8345.34))
);
