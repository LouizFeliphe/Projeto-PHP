<?php 

class Inserir extends Connect{
    public function inserir($name,$pass){
        $bd = $this->conn()->query("SELECT * FROM users WHERE users_uid = '$name'");
        if(!$bd) {
            header("Location: index.php?error=Erro na execução do banco de dados");
            exit();
        }
        if($bd->rowCount() == 0){
            header("Location: index.php?error=Usuario_nao_existe");
            exit();
        }
        session_start();


        $row = $bd->fetch();
        $_SESSION["userid"] = $row["users_uid"];

        $bd = null;
       
        
        
    }
}

