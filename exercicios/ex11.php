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
    $c1 = $_POST["P"];
    $c2 = $_POST["M"];
    $c3 = $_POST["G"];
    //$valorc1 = $_POST["check1"];
    //$valorc2 = $_POST["check2"];
    //$valorc3 = $_POST["check3"];

    $preço1 = $c1 * 10;
    $preço2 = $c2 * 12;
    $preço3 = $c3 * 15;
    $preçof = $preço1 + $preço2 + $preço3;

    echo "O valor arrecadado de acordo com sua escolha será: R$$preçof,00<br>";

    ?>
</body>
</html>