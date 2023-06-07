<?php

require_once APP_CONFIG['path']('config', 'database.php');

class Database
{

    function query($query, $args = [])
    {
        extract(DB_CONFIG);
        $pdo = new PDO(
            "mysql:host={$host};dbname={$db}",
            $user,
            $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        $stmt = $pdo->prepare($query);
        $stmt->execute($args);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
