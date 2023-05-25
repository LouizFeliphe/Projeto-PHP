<?php 
include "dbh.classes.php";
class Login extends Dbh {
    protected function getUser($uid,$pwd) {

        $stmt = $this->connect()->prepare("SELECT users_pwd FROM users WHERE users_uid = ? or users_email= ?;");
        echo "ola";

        

        if(!$stmt->execute([$uid,$pwd])) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            echo "ola";
            exit();
        }
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            echo "ola";
            exit();
        }
       
        $pwdHashed = $stmt->fetch();
        $checkPwd = password_verify($pwd, $pwdHashed["users_pwd"]);
        

        if($checkPwd == false) {
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            echo "ola";
            exit();
        }elseif($checkPwd == true){
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_uid = ? OR users_email= ? AND users_pwd = ?;");


            if(!$stmt->execute([$uid,$uid,$pwd])) {
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                echo "ola";
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                echo "ola";
                exit();
            }
            session_start();
            $row = $stmt->fetch();
            $_SESSION["userid"] = $row["users_uid"];
            
           
          
           
        }


       
            

            

            

            
            
          
        
        

        


        

    }

}


?>