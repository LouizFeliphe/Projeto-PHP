<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index9.php" method="post">
        <label for="country">Enter a country</label>
        <input type="text" name="country" id="country">
        <input type="submit" value="submit">

    </form>
</body>
</html>
<?php 
    $capital = strtoupper($_POST['country']);
    $capitals = array("USA"=> "Washington, D.C", "JAPAN"=> "Kyoto", "South Korea"=>"Seuol", "India" => "New Delhi");

    //$capitals["USA"] = "Las vegas";
    //$capitals["China"] = "Beijing";
    //array_shift($capitals);
    //array_pop($capitals);
    //$keys = array_keys($capitals);
    $response = $capitals[$capital];
    echo "The capital is $response"

?>