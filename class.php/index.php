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
    <main>
        <?php 
            if(isset($_SESSION["userid"])) {

            
        ?>
            <a href="#"><?php echo $_SESSION["userid"];?></a>
            <a href="includes/logout.inc.php">Logout</a>
        <?php 
            } else {
        ?>
           <a href="#">Sign up</a>
           <a href="includes/logout.inc.php">Login</a>
        <?php 
            }
        ?>
            
        
    </main>    
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
