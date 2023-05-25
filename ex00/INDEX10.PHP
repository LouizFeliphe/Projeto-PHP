<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index10.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="login" value="LOg IN">
    </form>
    
</body>
</html>

<?php 
    //$livro = ["USA" => "bully", "Japan" => "arroz"];
   // echo $livro["Japan"];



    /*
   foreach($_POST as $key => $value) {
        echo "$key = $value <br>";
   }
   

   if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "Username is misssing";
        } else if (empty($password)) {
                echo"Password is missing";
        } 
        
        else {
            echo"Hello $username";
        }
    }
    */
?>