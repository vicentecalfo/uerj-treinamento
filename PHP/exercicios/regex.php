<?php

$str = "Vicente Calfo";
$pattern = "/calfo/i";
echo preg_match($pattern, $str);

echo PHP_EOL;

$pattern2 = "/e/i";
echo preg_match_all($pattern2, $str);

echo PHP_EOL;

echo preg_replace($pattern, "Araujo", $str);