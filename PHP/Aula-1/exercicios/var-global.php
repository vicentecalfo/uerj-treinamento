<?php

/**
 * Material do curso de treinamento em PHP - Aula 1
 * @author Vicente Calfo <vicentecalfo@gmail.com>
 */

$var_global = "Essa é uma variável global.";

function varGlobal()
{
    global $var_global;
    echo $var_global;
}

function varGlobal2()
{
    echo $GLOBALS['var_global'];
}

varGlobal();
echo "\n---->";
varGlobal2();
echo "\n---->";
echo $var_global;
