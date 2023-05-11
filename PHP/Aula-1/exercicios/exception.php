<?php

function dividir($x, $y) {
    if ($y == 0) throw new Exception('Não é possível realizar uma divisão por zero');
    $resultado = $x / $y;
    return $resultado;
}

// $out = dividir(24,2);

// echo $out;

// echo PHP_EOL;

// try{
//     $out = dividir(24,0);
//     echo $out;
// }catch(Exception $error){
//     echo $error->getMessage();
// }

try {
    $out = dividir(24,2);
    echo $out . "\n"; 
    $out2 = dividir(24,0);
    echo $out2 . "\n"; 
} catch (Exception $error) {
    echo $error->getMessage()."\n";
}finally{
    echo 'Finalizado';
}