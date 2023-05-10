<?php
//While
//atribuindo valores a uma lista $colors
$colors = array("red", "green", "blue", "yellow");
$x = 0;
// enquanto x é menor que a contagem total de índices em colors
while($x < count($colors) ) {
  echo "<p>O indice é: $x </p>";
  echo "<p>O Valor é:".$colors[$x]." </p>";
  $x++;
} 

//Do While
$colors = array("red", "green", "blue", "yellow");
$x=0;
do{
  echo "<p>O indice é: $x </p>";
  echo "<p>O Valor é:".$colors[$x]." </p>";
  $x++;
} while($x < count($colors) );

// For
$colors = array("red", "green", "blue", "yellow");

for($x=0; $x< count($colors); $x++ ) {
  echo "<p>O indice é: $x </p>";
  echo "<p>O Valor é:".$colors[$x]." </p>";
  $x++;
} 

//aplicação do foreach, percorrendo array multidimensional
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
  
  foreach ($registros as $value) {
    echo "<br>Nome:".$value['nome']."- Idade:".$value['idade'];
  }


?>