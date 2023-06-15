<?php


function outputTransactionDTO($data)
{
    //$data['amount'] = formatCurrency($data['amount']);
    $data['date'] = formatDate($data['date']);
    return $data;
}
