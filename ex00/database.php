<?php 

    $db_server ="localhost:3307";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo "you're connected <br>";    
    }
    catch(mysqli_sql_exception){
        echo "you couldnt connect";
    }

    
?>