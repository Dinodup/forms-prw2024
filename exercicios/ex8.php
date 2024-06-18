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
    $nomes = $_POST["nome"];
    $idades = $_POST["idade"];

    echo "Nome do indivíduo: $nomes<br>";
    echo "Idade do indivíduo: $idades<br>";
    
    $ddd = $idades * 365;
    echo "A pessoa completou com essa idade: ".$ddd."dias de vida<br>";
    ?>
</body>
</html>