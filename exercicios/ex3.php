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
    $valort = $_POST["texto"];
    $valorc = $_POST["checkbox"];
    $valoro = $_POST["operacao"];
    $valors = $_POST["comida"];

    echo "Seu nome: ".$valort."<br>";
    
    if($valorc == 1 or $valorc == 2){
        echo "Você prefere ambos<br>";
    }
    if($valorc == 1){
        echo "Você prefere Carne<br>";
    }
    if($valorc == 2){
        echo "Você prefere Vegetal<br>";
    }
    

    if($valoro == 1){
        echo "Você compraria Faca<br>";
    }
    if($valoro == 2){
        echo "Você compraria panela<br>";
    }
    if($valoro == 3){
        echo "Você compraria Tigela<br>";
    }

    if($valors == 1){
        echo "Você escolhe como melhor comida Abacaxi<br>";
    }
    if($valors == 2){
        echo "Você escolhe como melhor comida Paçoca<br>";
    }
    if($valors == 3){
        echo "Você escolhe como melhor comida Bacon<br>";
    }
    ?>
</body>
</html>