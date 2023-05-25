<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Value received</h1>
    <?php 
        $num = $_REQUEST['num'];
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);    
        echo "Real convertido em dólar são ". numfmt_format_currency($padrao,$num, "BRL") ." "
    ?>
</body>
</html>