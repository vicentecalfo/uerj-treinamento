<?php

/**
 * Material do curso de treinamento em PHP - Aula 1
 * @author Vicente Calfo <vicentecalfo@gmail.com>
 */


$num = 2;
$numFake = "2";

echo gettype($num);
echo "\n";
echo gettype($numFake);
echo "\n";
echo $num + $numFake;
echo "\n";
var_dump($num == $numFake);
echo "\n";
var_dump($num === $numFake);