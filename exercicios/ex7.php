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
    $nome = $_POST["nome"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $freq = $_POST["fre"];

    echo "Nome do aluno: $nome<br>";
    echo "Nota 1 do aluno: $n1<br>";
    echo "Nota 2 do aluno: $n2<br>";
    echo "Frequência do aluno: $freq<br>";
    
    $media = ($n1 + $n2)/2;
    echo  "Média aritmética do aluno: $media<br>";

    if($media < 5){
        echo "<red>Reprova por nota<red>";
    }
    if($freq < 75){
        echo "Reprova por frequência";
    }
    if($media > 5 and $freq > 75){
        echo "Aprovado";
    }


    if($resto4 == 0 and $resto100 =! 0 or $resto400 == 0){
        echo "É um ano bissexto";
    }
    else{
        echo "Não é um ano bissexto";
    }
    ?>
</body>
</html>