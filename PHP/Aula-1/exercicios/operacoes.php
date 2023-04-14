<?php

/**
 * Material do curso de treinamento em PHP - Aula 1
 * @author Vicente Calfo <vicentecalfo@gmail.com>
 */


$precoProdutoA = 30;
$precoProdutoB = 40;
$frete = 10;
$desconto = 5;
$qtdCartao = 2;
$totalUnidadesCompradas = 3;

echo "Valor do produto A: R$ " . $precoProdutoA;

echo "\n";

echo "Valor do produto B: R$ " . $precoProdutoB;

echo "\n";

echo "Valor do frete: R$ " . $frete;

echo "\n";

$totalCompra = $precoProdutoA + $precoProdutoB + $frete;

echo "Total da compra é de R$ " . $totalCompra;

echo "\n";

$totalCompraDesconto =  $totalCompra - $desconto;

echo "Total da compra com desconto (R$ " . $desconto . ") é de R$ " . $totalCompraDesconto;

echo "\n";

$totalComprandoProdutoAXUnidades = $precoProdutoA * $totalUnidadesCompradas + $frete;

echo "Você comprou " . $totalUnidadesCompradas . " unidades do produto A (R$" . $precoProdutoA . "). Valor final de R$ " . $totalComprandoProdutoAXUnidades . " (R$ " .  $precoProdutoA . " x " . $totalUnidadesCompradas . " + frete de R$ " . $frete . ")";

echo "\n";

$dividindoTotalEm2Cartoes = $totalCompra / $qtdCartao;

echo "Você dividiu sua compra de R$ " . $totalCompra .  " em " . $qtdCartao . " cartões. Será debitado R$" . $dividindoTotalEm2Cartoes . " em cada cartão.";

echo "\n";
echo "------------------------------------";
echo "\n";

$cuboAresta = 6; // cm
$volumeCubo = 6 * 6 * 6; //cm2
$volumeCuboOperadorPotencia = $cuboAresta ** 3; //cm2

echo "Volume: " . $volumeCubo;
echo "\n";
echo "Volume usando operador de potência: " . $volumeCuboOperadorPotencia;

echo "\n";
echo "------------------------------------";
echo "\n";

$restoDaDivisao = 15 % 2; 

echo "Resto da divisão: " . $restoDaDivisao;
echo "\n";
