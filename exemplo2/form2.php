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
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $Nome = $_POST["Nome"];
    $email = $_POST["email"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $erro=0;
    if (strlen($nome)<5){
        echo "O username deve possuir no mínimo 5 caracteres."; 
        $erro=1;
    }
    
    if (strlen($senha)<5){ 
        echo "A senha deve possuir no mínimo 5 caracteres.";
        $erro=1;
    }
    
    if(empty($cidade)){
        echo "Favor digitar sua cidade";
        $erro=1;
    } 
    
    if(strlen($estado)!=2){
        echo "Favor digitar seu estado corretamente";
        $erro=1;
    }
    
    //VERIFICA SE NÃO HOUVE ERRO
    if($erro==0){
        echo "Todos os dados foram digitados corretamente!";
    }
    ?>
    </body>
    </html>