<?=

/**
 * Material do curso de treinamento em PHP - Aula 1
 * @author Vicente Calfo <vicentecalfo@gmail.com>
 */


$hora = 17;

if ($hora < 17) {
   echo "Tenha um bom dia.";
}

$isEqual = $hora === 17;

echo $isEqual; // não vai imprimir nada
echo PHP_EOL;
var_dump($isEqual);

if ($isEqual) {
   echo "Sou idêntico.";
} else {
   echo "Não sou idêntico.";
}

echo PHP_EOL;

$saldo = 10;
$preco = 5;
$temSaldo = $saldo >= $preco;

if ($temSaldo) {
   echo "Posso comprar.";
} else {
   echo "Não posso comprar.";
}
