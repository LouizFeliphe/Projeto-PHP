<?php 
   spl_autoload_register("myautoloader");

   function myautoloader($classname){
       $path = "../classes/";
       $extension = ".php";
       $fullname = $path .$classname . $extension;
       echo $fullname;
       require_once $fullname;

   } 
   
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
        $teste = new usersview();
        $teste->showUsers("Squidward");
        
       
        
        
    ?>
</body>
</html>