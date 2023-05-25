<?php 
    session_start();

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
    <form action="home.php" method="post">
        <label for="login">Username: </label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <input type="submit" name ="LOGIN" value="login">


    </form>
    <a href="index18.php">next page</a>
</body>
</html>
<?php 
    if (isset($_POST["LOGIN"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        header("Location: index18.php");
        
    }
    

    

?>