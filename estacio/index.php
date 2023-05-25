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
    <script>
        function vasculhar(objt) {
            if(!objt.value) {
                return false;
            }
            return true;
        }
        function validar() {
            if(!vasculhar(document.getElementById("user"))) {
                document.getElementById("user").focus()
                return false;
            }
            if(!vasculhar(document.getElementById("pass"))) {
                document.getElementById("pass").focus()
                return false;
               
            }
            return true;
        }

    </script>
    <main>
        <?php
            if(isset($_SESSION["userid"])) {
        ?>
            <a href="logout.php">Logout</a>
           <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                </tr>
                <tbody>
                    <tr>
                        <td><?php echo $_SESSION["userid"]?></td>
                        <td><?php echo $_SESSION["userid"]?></td>
                    </tr>
                </tbody>
            </thead>
           </table>
        
        <?php
           } else {
        ?>
            <a href="#">Sign</a>
        <?php
           }
        ?>
       
            <div class="form">
                <form class="formulario" action="insert.php" method="post" onsubmit="return validar()">
                    <input type="text" name="user" id="user" placeholder="username">
                    <input type="text" name="pass" id="pass">
                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
 
    </main>
</body>
</html>