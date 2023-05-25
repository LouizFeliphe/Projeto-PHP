<?php 
    include("users.php");

class usersview extends users {
    public function showUsers($name) {
        $results = $this->getUser($name);
        echo "Full name: ". $results["user"] ."<br>" . $results["id"];


    }
}

