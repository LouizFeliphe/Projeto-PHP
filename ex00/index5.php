<?php 
    $child = false;
    $senior = true;
    $ticekt = null;
    
    if ($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15; 
    }

    echo "The ticket price is \$$ticket"
?>