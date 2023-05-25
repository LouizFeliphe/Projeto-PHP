<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex005/style.css">
</head>
<body>
   <main>

        <?php 
            $num= $_GET['num'];
            echo "O numero é $num
            <br> O Antes é ". $num - 1 ." 
            <br> O Depois é ". $num + 1 ."
            ";

        ?>
        <button onclick="javascript:history.go(-1)">voltar</button>

    </main>
</body>
</html>