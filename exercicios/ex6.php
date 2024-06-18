<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A medida para a área será: </h1>
    <?php
    $t1 = $_POST["texto1"];
    $t2 = $_POST["texto2"];

    echo "Comprimento: $t1 metros<br>";
    echo "Largura: $t2 metros<br>";
    $a = $t1 * $t2;
    echo "Área: $a metros<br>";
    ?>
</body>
</html>