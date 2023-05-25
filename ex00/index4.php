<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index4.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius" id="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php 
    $radius = $_POST['radius'];
    $circumference = null;
    $area = null;
    $cicumference = 2 * pi() * $radius;
    $area = pi() * $radius**2;
    
    echo "Circumferenfce = ". round($area,2) ." cm <br>";
?>