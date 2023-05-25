<?php
    include("ex003.php");


class users extends dbh {

    protected function getUser($name) {
        $sql = "SELECT * from users WHERE user = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetch();
        return $results;


    }

    protected function setUser($name,$password) {
        $sql = "INSERT INTO users(user, password)
        VALUES(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$password]);
        echo "Aprovado";
        


    }
}


