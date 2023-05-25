<?php

class Connect{
    protected function conn() {
        try {

            $db_user = "root";
            $db_pass = "";
            $db_name = "businessdb";
            $db_host = "localhost:3307";
            $dlt = "mysql:host=$db_host;dbname=$db_name";
            $dbh = new PDO($dlt,$db_user,$db_pass);
            return $dbh;
    
            }catch(PDOException $e) {
                echo "It wasnt possible to connect to the database<br>" . $e->getMessage();
                header("Location: index.php?error=databaserror");
            }
    }
}
