<?php
 
$nomes = array("Vicente", "Beltrão", "André", "Fernando");
sort($nomes);
echo join(", ", $nomes);

echo PHP_EOL;

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo join(", ", $numbers);