<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex005/style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                echo "<h1>SuperGlobal GET</h1>"; 
                var_dump($_GET);
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
            ?>
        </pre>
    </main>
</body>
</html>