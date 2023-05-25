<?php
    spl_autoload_register("myautoloader");

    function myautoloader($classname){
        $extension = ".php";
        $fullname = $classname . $extension;
        require_once $fullname;

    } 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>My own calculator</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="second number">
        <button type="submit" name="submit" value="Submit">Calculate</button>
    </form>
    <?php
    if (isset($_POST["submit"]))   { 
        $calc = new calculator($_POST["num1"],$_POST["num2"]);
        switch($_POST["oper"]) {
            case "add":
                echo $calc->add();
                break;
            case "sub":
                echo $calc->sub();
                break;
            case "div":
                echo $calc->div();
                break;
            case "mul":
                echo $calc->mul();
                break;    
                
        }
    }

    ?>
</body>
</html>