<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index7.php" method="post" >
        <label for="num">Enter a number to count down from:</label>
        <input type="text" name="num" id="num">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php 
    $counter = $_POST['num'];

    for($i = $counter;$i >= 1; $i--) {
        echo "Number is $i <br>";
    }
 
?>