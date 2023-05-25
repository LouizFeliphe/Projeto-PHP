<!DOCTYPE html>
<html lang="pt-br">
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
        $num = $_REQUEST['num'];
        $arredondar = fmod($num,1) ;
        echo " <p>O número é <strong>".number_format($num, 3, ",",".")."</strong><br> Sua parte inteira é ". floor($num) ."<br> Sua parte fracionada é $arredondar </p>";
        ?>
    </main>
</body>
</html>