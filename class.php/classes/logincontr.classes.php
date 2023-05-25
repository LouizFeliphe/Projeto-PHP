<?php 


class loginContr extends Login{

    private $uid;
    private $pwd;

    
    public function __construct($uid,$pwd) {

        $this->uid = $uid;
        $this->pwd = $pwd;

    }

    public function loginUser() {
        if($this->emptyInput() == false){
            header("Location: ../index.php?error=gg");
            exit();
        }
       

        $this->getUser($this->uid, $this->pwd);
        
    }


    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
            return $result;
            

        } else {
            $result = true;
            return $result;
            
        }
       
    }

 
}