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
    $t = $_POST[$texto];
    $ro = $_POST[$rola];
    $check = $_POST[$check1];
    $check = $_POST[$check2];
    $ra = $_POST[$operacao];
    $op = $_POST[$comida];

    echo "Seu nome: ".$t;
    
    if($check == $check1){
        echo "Você prefere Carne";
    }
    if($check == $check2){
        echo "Você prefere Vegetal";
    }

    if($ra == $fac){
        echo "Você compraria Faca: ";
    }
    if($ra == $pan){
        echo "Você compraria panela: ";
    }
    if($ra == $tig){
        echo "Você compraria Tigela: ";
    }

    if($comida == $aba){
        echo "Você compraria Tigela: ";
    }
    if($comida == $paco){
        echo "Você compraria Tigela: ";
    }
    if($comida == $baco){
        echo "Você compraria Tigela: ";
    }
    ?>
</body>
</html>