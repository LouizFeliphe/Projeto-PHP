<?php 
    include("database.php");
      
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
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <h2>Welcome to Fakebook</h2>
        username:<br>
        <input type="text" name="username" id="username"><br>
        password:<br>
        <input type="password" name="password" id="password">
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username) or empty($password)) {
            echo "Please enter your username/password";
        } else {
            $harsh = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(user, password)
            VALUES('$username','$harsh')";
            try {
                mysqli_query($conn, $sql);
                echo "You are now registered";
            }
            catch(mysqli_sql_exception) {
                echo "That username is taken";

            }
            
        }
    }

    mysqli_close($conn);
?>

