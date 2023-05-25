<?php 
    setcookie("fav_food", "pizza", time() + 86400 * 2, "/ksnfksnfsf");
    setcookie("fav_drink", "coffe", time() + 86400 * 3, "/");
    setcookie("fav_dessert", "ice_cream", time() + 86400 * 4, "/");

    foreach($_COOKIE as $key => $value) {
            echo "$key = $value <br>";
    }

   

    if(isset($_COOKIE["fav_food"])) {
            echo "Buy some {$_COOKIE["fav_food"]}";
    } else {
        echo "I dont know your favorite food :(";
    }
?>