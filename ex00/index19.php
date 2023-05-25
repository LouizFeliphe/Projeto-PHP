<?php 
    $password = "pizza123";
    $harsh = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify("pizza123",$harsh)) {
            echo "You are loged in";
    } else {
        echo "Acess denied";
    }

?>