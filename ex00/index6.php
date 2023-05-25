<?php 
    
    $date = date("l");
    $date = "Wednesday";
    
    switch($date) {
        case "Monday":
            echo "I hate mondays";
            break;
        case "Tuesday":
            echo "It is taco tuesday";
            break;
        case "Wednesday":
            echo "The work week is half over!";
            break;
        case "Thurday";
            echo "Its almost the weekend";
            break;
        case "Friday";
            echo "The weekend is here";
            break;
        case "Saturday":
            echo "Time to party !";
            break;
        case "Sunday":
            echo "Time to relax";
            break;
        default:
            echo "Invalid parameter";
    }

?>