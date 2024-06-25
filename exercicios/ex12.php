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
    $pr = $_POST["prontuario"];
    $n = $_POST["nome"];
    $i = $_POST["idade"];
    $p = $_POST["periodo"];
    $m = $_POST["modulo"];
    $erro=0;

    if (empty($pr)){
        echo "Prontuário não pode estar em branco<br>"; 
        $erro=1;
    }
    else{
        echo "Prontuário: ".$pr."<br>";
    }

    if (empty($n)){
        echo "Nome não pode estar em branco<br>"; 
        $erro=1;
    }
    else{
        echo "Nome: ".$n."<br>";
    }

    if (strlen($i)<15 or strlen($i)>75){ 
        echo "Idade deve ser um valor entre 15 e 75 anos<br>";
        $erro=1;
    }
    else{
        echo "Idade: ".$i."<br>";
    }

    if($p!="V" and $p!="N"){
        echo "Período deve ser V-Vespertino ou N-Noturno<br>";
        $erro=1;
    }
    else{
        echo "Período: ".$p."<br>";
    }

    if (strlen($m)<1 or strlen($i)>4){ 
        echo "Módulo pode ser um valor entre 1 e 4<br>";
        $erro=1;
    }
    else{
        echo "Módulo: ".$m."<br>";
    }
    ?>
</body>
</html>