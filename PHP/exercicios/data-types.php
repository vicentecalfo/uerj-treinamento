<?php

/**
 * Material do curso de treinamento em PHP - Aula 1
 * @author Vicente Calfo <vicentecalfo@gmail.com>
 */


$string = "Sou uma string!"; // string
var_dump($string);

$int = 2023; // inteiro (interger)
var_dump($int);

$float = 150.980; // flutuante (float)
var_dump($float);

$verdadeiro = true; // booleano
var_dump($verdadeiro);

$falso = false; // booleano
var_dump($falso);

$nomes = array("Vicente", "Austeclynio", "Fernando"); // array
var_dump($nomes);

class Pessoa
{
    public $nome;
    public $idade;
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function boasVindas()
    {
        return "Seja bem-vindo, " . $this->nome . "! Nunca é tarde para aprender PHP, mesmo aos " . $this->idade . " anos.";
    }
}

$pessoa = new Pessoa("Vicente", 40);
echo $pessoa->boasVindas();
echo "\n";
var_dump($pessoa);
echo $pessoa->nome;

echo "\n";

$tenhoValorMasVouFicarNulo = "Por pouco tempo terei valor";
var_dump($tenhoValorMasVouFicarNulo);
$tenhoValorMasVouFicarNulo = null;
var_dump($tenhoValorMasVouFicarNulo);
$soDeclarei;
var_dump($soDeclarei);
