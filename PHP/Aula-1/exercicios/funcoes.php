<?php

//Definidas pelo usuário
//Funções com argumentos obrigatórios
// criar uma função para calcular a média de 2 números

function media($nota1, $nota2) {
    return ($nota1+$nota2) / 2;
}
//executando
media(5,7);

# Funções com argumentos variáveis
// criar uma função para somar 3 números
//Valor 1 e Valor 2 são obrigatórios
function exibe($valor1, $valor2, $valor3=0) {
    return $valor1+ $valor2 + $valor3;
}

//executando
exibe(8,10);
exibe(8,10, 21);

# Desconstruindo uma array com uma função

function primeiros_numeros()
{
    return [0, 1, 2];
}
// Desconstruir o array coleta cada item individualmente
[$zero, $um, $dois] = primeiros_numeros();

var_dump($um);
# Desconstruindo um array multidimensional com uma função

function primeiros_objetos()
{
   $registros = [
     [
       "nome" => "Luciana",
       "idade" => 50,
     ],
     [
       "nome" => "Luiz",
       "idade" => 40,
     ]
   ];

    return $registros;
}
// Desconstruir o array coleta cada item individualmente
[$vetor1, $vetor2 ] = primeiros_objetos();

var_dump($vetor1['nome']);


# Arrow function
$valorDoEmprestimo = 30000;
$taxaDeJuros = 18.63;

function calcularJuros($emprestimo, $taxa) {
    return $emprestimo * ($taxa/100);
}

var_dump(calcularJuros($valorDoEmprestimo, $taxaDeJuros));

#Exemplo herdando a variável $taxaDeJuros do escopo global. 

$valorDoEmprestimo = 30000;
$taxaDeJuros = 18.63;

$jurosCalculados = function ($emprestimo) use ($taxaDeJuros) {
    return $emprestimo * ($taxaDeJuros/100);
};

#Exemplo utilizando arrow function 

$valorDoEmprestimo = 30000;
$taxaDeJuros = 18.63;

$jurosCalculados = fn ($emprestimo) => $emprestimo * ($taxaDeJuros/100);

var_dump($jurosCalculados($valorDoEmprestimo));