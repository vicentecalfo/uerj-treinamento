<?php


$primeirosNumeros = array(0,1,2);

// Desconstruir o array coleta cada item individualmente
[$zero, $um, $dois] = $primeirosNumeros;

echo $zero;
echo PHP_EOL;
echo $um;
echo PHP_EOL;
echo $dois;

echo PHP_EOL;

$array = [
    "nome" => "Luciana",
    "idade" => 50,
];

extract($array);

echo PHP_EOL;
echo $nome;
echo PHP_EOL;
echo $idade;

echo PHP_EOL;

$array2 = [
    "nome" => "José",
    "idade" => 26,
];

list('nome' => $nome, 'idade' => $idade) = $array2;

echo PHP_EOL;
echo $nome;
echo PHP_EOL;
echo $idade;

echo PHP_EOL;

['nome' => $nome, 'idade' => $idade] = $array2;

echo PHP_EOL;
echo $nome;
echo PHP_EOL;
echo $idade;