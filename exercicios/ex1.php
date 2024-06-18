<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $distancia = $_POST["distancia"];
    $velocidade = $_POST["velocidade"];
    $consumo = $_POST["consumo"];
    $thoras = $distancia/$velocidade;
    $tcombustivel = $distancia/$consumo;

    echo "\nTotal horas: ". $thoras;
    echo "\nTotal combustivel: ".$tcombustivel;
    ?>
</body>
</html>