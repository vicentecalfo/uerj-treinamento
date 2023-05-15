<?php

/**
 * Material do curso de treinamento em PHP - Aula 1
 * @author Vicente Calfo <vicentecalfo@gmail.com>
 */


$idade = 40;
$nome = "Vicente Calfo";

$msg = 'Sou o ' . $nome . ' e tenho ' . $idade . ' anos.'; // concatenação
$msg2 = "Sou o " . $nome . " e tenho " . $idade . " anos."; // concatenação
$msg3 = "Sou o $nome e tenho $idade anos."; // interpolação
$msg4 = "Sou o {$nome} e tenho {$idade} anos."; // interpolação

echo $msg;
echo "\n";
echo $msg2;
echo "\n";
echo $msg3;
echo "\n";
echo $msg4;
