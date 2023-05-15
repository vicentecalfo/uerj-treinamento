<?php

/**
 * Material do curso de treinamento em PHP - Aula 1
 * @author Vicente Calfo <vicentecalfo@gmail.com>
 */

function local()
{
    $x = 0;
    echo $x;
    echo "\n";
    $x++;
}

function localStatic()
{
    static $x = 0;
    echo $x;
    echo "\n";
    $x++;
}

local();
local();
local();
echo "-----------------------------\n";
localStatic();
localStatic();
localStatic();
