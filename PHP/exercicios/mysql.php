<?php

$db = array(
    "host" => "sql10.freesqldatabase.com",
    "name" => "sql10618492",
    "username" => "",
    "password" => ""
);

$pdo = new PDO("mysql:host={$db['host']};dbname={$db['name']}",$db['username'], $db['password']);

$unbufferedResult = $pdo->query("SELECT Name, URL FROM avengers");
foreach ($unbufferedResult as $row) {
    echo "{$row['Name']} ({$row['URL']})";
    echo PHP_EOL;
}