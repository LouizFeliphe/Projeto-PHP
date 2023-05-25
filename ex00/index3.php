<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index3.php" method="post">
        <label for="x">x</label>
        <input type="text" name="x" id="x">
        <label for="y">y</label>
        <input type="text" name="y" id="y">
        <br>
        <label for="z">z</label>
        <input type="text" name="z" id="z">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;
    //$total = abs($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = sqrt($x);
    //$total = pow($x,$y);
    $total = max($x,$y,$z);
    echo "$total";
?>