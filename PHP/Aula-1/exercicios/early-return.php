<?php

function bad($x, $y, $z)
{
    if ($x && is_numeric($x)) {
        if ($y && is_numeric($y)) {
            if ($z && is_numeric($z)) {
                return $x + $y + $z;
            } else {
                return 'Erro';
            }
        } else {
            return 'Erro';
        }
    } else {
        return 'Erro';
    }
}

function better($x, $y, $z)
{
    if (!($x && is_numeric($x))) return 'Erro';
    if (!($y && is_numeric($y))) return 'Erro';
    if (!($z && is_numeric($z))) return 'Erro';
    return $x + $y + $z;
}

function bestVersion($x, $y, $z)
{

    $isInvalid = fn ($value) => !($value && is_numeric($value));
    if ($isInvalid($x) || $isInvalid($y) || $isInvalid($z)) return 'Erro';
    return $x + $y + $z;
}

$x = '1';
$y = 1;
$z = 2;

echo bad($x, $y, $z);
echo PHP_EOL;
echo better($x, $y, $z);
echo PHP_EOL;
echo bestVersion($x, $y, $z);
