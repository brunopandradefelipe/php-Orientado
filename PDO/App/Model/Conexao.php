<?php

namespace App\Model;

class Conexao {
    private static $pdo;
    public static function getConn() {
        if(!isset(self::$pdo)){
            self::$pdo = new \PDO("mysql: host=localhost; dbname=pdocurso; charset=utf8", "root", "");
        }
        return self::$pdo;
    }
}