<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index12.php" method="post">
        <input type="checkbox" name="pizza" id="piz" value="Pizza">
        <label for="piz">Pizza</label><br>
        <input type="checkbox" name="hamburguer" id="hambu" value="hamburguer">
        <label for="hambu">Hamburguer</label><br>
        <input type="checkbox" name="HotDog" id="dog" value="hotdog">
        <label for="dog">HotDog</label><br>
        <input type="checkbox" name="taco" id="tacoli" value="tacos">
        <label for="tacoli">Taco</label><br>
        <input type="submit" value="Confirm" name="confirm">
        
       
    </form>
</body>
</html>
<?php 
    if (isset($_POST["confirm"])) {
        if(isset($_POST["pizza"])) {
            echo "You like pizza";
        }
        if (isset($_POST["hamburguer"])) {
            echo "You like hamburguer";
        }
        if (isset($_POST["HotDog"])) {
            echo "You like dogao";
        }
        if (isset($_POST["taco"])) {
            echo "You like taco";
        }
    }
?>