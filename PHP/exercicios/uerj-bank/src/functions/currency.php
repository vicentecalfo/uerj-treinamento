<?php

function formatCurrency($amount, $asset = "BRL", $locale = true, $decimals = 2)
{
    $amount = (float)$amount;

    $assets = [
        'BRL' => [',', '.', 'R$ '],
        'US' => ['.', ',', 'US$ ']
    ];

    // $negation = ($amount < 0) ? (-1) : 1;
    // $coefficient = 10 ** $decimals;
    // $number = $negation * floor((string)(abs($amount) * $coefficient)) / $coefficient;
    //[$decimalSep, $thounsandsSep, $localeAsset] = $assets[$asset];
    //$locale = $locale ? $localeAsset : '';
    //$amount =  number_format(floor($amount*100)/100,$decimals, $decimalSep, $thounsandsSep);
    $amount = sprintf('%01.2f', $amount);
    return $amount;
}
