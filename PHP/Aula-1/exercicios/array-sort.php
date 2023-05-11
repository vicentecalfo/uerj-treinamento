<?php
 
$nomes = array("Vicente", "Beltrão", "André", "Fernando");
sort($nomes);
echo join(", ", $nomes);

echo PHP_EOL;

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo join(", ", $numbers);

echo PHP_EOL;

$idades = array("Vicente" => 40, "Beltrão" => 39, "André" => 48, "Fernando" => 50);
ksort($idades);
echo join(", ", $idades); // 48, 39, 50, 40

echo PHP_EOL;

$idades2 = array("Vicente" => 40, "Beltrão" => 39, "André" => 48, "Fernando" => 50);
krsort($idades2);
echo join(", ", $idades2); // 40, 50, 39, 48

echo PHP_EOL;

$idades3 = array("Vicente" => 40, "Beltrão" => 39, "André" => 48, "Fernando" => 50);
asort($idades3);
echo join(", ", $idades3); // 39, 40, 48, 50

echo PHP_EOL;

$idades4 = array("Vicente" => 40, "Beltrão" => 39, "André" => 48, "Fernando" => 50);
arsort($idades4);
echo join(", ", $idades4); // 50, 48, 40, 39

echo PHP_EOL;

$idades5 = array("Vicente" => 40, "Beltrão" => 39, "André" => 48, "Fernando" => 50);
sort($idades5);
echo join(", ", $idades5); // 50, 48, 40, 39