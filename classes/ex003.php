<?php

class dbh {
    private $host = "localhost:3307";
    private $user = "root";
    private $pwd = "";
    private $dbname = "businessdb";

    protected function connect (){
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        try {
            $pdo = new PDO($dsn,$this->user,$this->pwd);
            return $pdo;
        }catch(PDOException) {
            echo "Não foi possiveol conectar";
        }
     
    }
}