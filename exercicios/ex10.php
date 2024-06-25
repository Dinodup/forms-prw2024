<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados</h1>
    <?php
    $n = $_POST["nome"];
    $tempo = $_POST["time"];

    echo "Saudações caro(a) $n<br>";

    if($tempo < 12){
        echo "Bom dia<br>";
    }
    elseif($tempo < 18){
        echo "Boa tarde<br>";
    }
    elseif($tempo > 18){
        echo "Boa noite<br>";
    }
    ?>
</body>
</html>