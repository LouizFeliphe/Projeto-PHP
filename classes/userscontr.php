<?php 
   include("users.php");


class userscontr extends users {

    public function createUser($name,$password) {
        $this->setUser($name, $password);
    }

}