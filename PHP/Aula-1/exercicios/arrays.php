<?php

// Função array()
$array = array(
    "nome" => "Luiz",
    "idade" => 40,
);

var_dump($array);

// Utilizando a sintaxe curta
$array = [
    "nome" => "Luciana",
    "idade" => 50,
];

var_dump($array);

// O índice do array é opcional
$array = array('a', 'b', 25, 49);
var_dump($array);

// Utilizando a sintaxe curta
$array = [
    "Luciana",
    "idade" ,
];

var_dump($array);

// A chave do array é opcional, e torna-se um índice.
$array = array('a', 'b', 25, 49);

var_dump($array[0]); // será exibida a letra a
var_dump($array[1]); // será exibida a letra b
var_dump($array[2]); // será exibida o valor 25
var_dump($array[3]); // será exibida o valor 49

//array com chave / valor
$array = [
    "nome" => "Luciana",
    "idade" => 50,
];

var_dump($array["nome"]); // será exibida Luciana
var_dump($array["idade"]); // será exibido o valor 50

// array com chave / valor
$array = [
    "nome" => "Luciana",
    "idade" => 50,
];

// acrescimo de um registro
$lista[] = $array ;
var_dump($lista);

// acrescimo de dois registros
$lista = [
    [
      "nome" => "Luciana",
      "idade" => 50,
    ],
    [
       "nome" => "Luiz",
      "idade" => 40,
    ]
  
  ];
var_dump($lista);

// Acessando dois registros
$lista = [
    [
      "nome" => "Luciana",
      "idade" => 50,
    ],
    [
       "nome" => "Luiz",
      "idade" => 40,
    ]
  
  ];
  
var_dump($lista[0]['nome']); // exibe o nome Luciana
var_dump($lista[1]['nome']); // exibe o nome Luiz
var_dump($lista[1]['idade']); // exibe a idade do Luiz = 40

?>