<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>O ano será:</h1>
    <?php
    $texto = $_POST["texto"];

    $resto4 = $texto%4;
    $resto100 = $texto%100;
    $resto400 = $texto%400;

    if($resto4 == 0 and $resto100 =! 0 or $resto400 == 0){
        echo "É um ano bissexto";
    }
    else{
        echo "Não é um ano bissexto";
    }
    ?>
</body>
</html>