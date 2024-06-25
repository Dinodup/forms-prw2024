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
    $valors = $_POST["nums"];

    echo "Tabuada do ".$valors."<br>";
    for($i=0; $i <= 10; $i++){
        $conta = $valors*$i;
        echo $valors." x ".$i." = ".$conta."<br>";
    }
    ?>
</body>
</html>