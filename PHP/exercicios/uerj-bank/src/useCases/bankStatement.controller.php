<?php
require_once __DIR__ . '/../functions.php';


router(
    'GET',
    '^/extrato',
    function(){
        $bankStatementData = [
            [
                "transaction" => "debit",
                "source" => "Ofertão Saúde",
                "amount" => 12.90,
                "timestamp" => 1684515738
            ],
            [
                "transaction" => "debit",
                "source" => "Varejão dos Descartáveis",
                "amount" => 60.00,
                "timestamp" => 1684515738
            ],
            [
                "transaction" => "incomePix",
                "source" => "Enzo Marinelli Calfo",
                "amount" => 700.00,
                "timestamp" => 1684515738
            ],
            [
                "transaction" => "outcomePix",
                "source" => "André Eppinghaus do Carmo",
                "amount" => 700.00,
                "timestamp" => 1684515738
            ]
        ];
        includeWithVariables('bankStatement', array('bankStatement' =>  $bankStatementData), "extrato");
    }
);