<?php
    declare(strict_types = 1);
    include("Person.class.php");
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
    <?php
       $person1 = new Person("johndoeroad","CARLOS",14);
       try {echo $person1->setName(4);
        }catch(TypeError $e) {
            echo "Credenciais invalidas <br>" . $e->getMessage();
        }
       
      
    ?>
</body>
</html>