<?php 

class Dbh{
    
    protected function connect() {
        try {

        $db_user = "root";
        $db_pass = "";
        $db_name = "businessdb";
        $db_host = "localhost:3307";
        $dlt = "mysql:host=$db_host;dbname=$db_name";
        $dbh = new PDO($dlt,$db_user,$db_pass);
        return $dbh;

        }catch(PDOExecption $e) {
            echo "It wasnt possible to connect to the database<br>" . $e->getMessage();
        }
    }
}


