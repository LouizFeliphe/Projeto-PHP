<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index1.php" method="get">
        <label> quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
   </form>
</body>
    <?php 
        $item = "pizza";
        $price = 5.99;
        $quantity = $_GET["quantity"];
        $total = $quantity * $price;

        echo "You have ordered {$quantity} x {$item}/s";
        echo "Your total is: /$$total";


    ?>
</html>
