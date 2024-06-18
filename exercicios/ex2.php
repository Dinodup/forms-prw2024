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
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $operacao = $_POST["operacao"];

    if($operacao == $soma){
        $soma = $n1 + $n2;
        echo "Soma: ". $soma;
    }
    elseif($operacao == $subt){
        $subt = $n1 - $n2;
        echo "Subtração: ". $subt;
    }
    elseif($operacao == $div){
        $div = $n1/$n2;
        echo "Divisão: ". $div;
    }
    elseif($operacao == $mult){
        $mult = $n1 * $n2;
        echo "Multiplicação: ". $mult;
    }
    ?>
</body>
</html>