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
    this is the login page<br>
    <a href="home.php">This goes to the LOGIN page</a><br>
    <form action="index18.php" method="post">
            <input type="submit" value="logout" name="logout">

    </form>
</body>
</html>
<?php 

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";    
    if (isset($_POST["logout"])) {
        session_destroy();
        header("Location: home.php");
    }

?>