<?php 

class SignupContr extends Signup{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;
    
    public function __construct($uid,$pwd,$pwdrepeat,$email) {

        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;

    }

    public function signupUser() {
        if($this->emptyInput() == false){
            header("Location: ../index.php?error=gg");
            exit();
        }
        if($this->InvalidUid() == false){
            header("Location: ../index.php?error=username");
            exit();
        }
        if($this->InvalidEmail() == false){
            header("Location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            header("Location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            header("Location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
        
    }


    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
            $result = false;
            return $result;
            

        } else {
            $result = true;
            return $result;
            
        }
       
    }

    private function InvalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function InvalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if ($this->pwd !== $this->pwdrepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result;
        if (!$this->checkUser($this->uid,$this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}