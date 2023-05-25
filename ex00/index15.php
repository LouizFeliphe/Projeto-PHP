<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index15.php" method="post">
        <label for="user">username: </label>
        <input type="text" name="username" id="user">
        <label for="ag">age: </label>
        <input type="text" name="age" id="ag">
        <br>
        <label for="emai">email: </label>
        <input type="email" name="email" id="emai">
        <input type="submit" value="login" name="Login">

    </form>
</body>
</html>
<?php 
    if (isset($_POST["Login"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST,"age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);

        if(empty($age)) {
            echo "Input's empty <br>";
            echo "A $age está vazia";
        } else {
            echo "validated <br>";
            echo "A $age está completa";
        }
    }
?>