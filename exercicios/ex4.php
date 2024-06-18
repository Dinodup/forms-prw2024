<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A capital do seu estado escolhido é:</h1>
    <?php
    $texto = $_POST["texto"];

    if($texto == 'Acre'){
        echo "Rio Branco";
    }
    if($texto == 'Alagoas'){
        echo "Maceió";
    }
    if($texto == 'Amapa'){
        echo "Macapá";
    }
    if($texto == 'Amazonas'){
        echo "Manaus";
    }
    if($texto == 'Bahia'){
        echo "Salvador";
    }
    if($texto == 'Ceará'){
        echo "Fortaleza";
    }
    if($texto == 'Espírito Santo'){
        echo "Vitória";
    }
    if($texto == 'Goiás'){
        echo "Goiânia";
    }
    if($texto == 'Maranhão'){
        echo "São luis";
    }
    if($texto == 'Mato Grosso'){
        echo "Cuiabá";
    }
    if($texto == 'Mato Grosso do Sul'){
        echo "Campo Grande";
    }
    if($texto == 'Minas Gerais'){
        echo "Belo Horizonte";
    }
    if($texto == 'Pará'){
        echo "Belém";
    }
    if($texto == 'Paraíba'){
        echo "João Pessoa";
    }
    if($texto == 'Paraná'){
        echo "Curitiba";
    }
    if($texto == 'Pernambuco'){
        echo "Recife";
    }
    if($texto == 'Piauí'){
        echo "Teresina";
    }
    if($texto == 'Rio de Janeiro'){
        echo "Rio de Janeiro";
    }
    if($texto == 'Rio Grande do Norte'){
        echo "Natal";
    }
    if($texto == 'Rio Grande do Sul'){
        echo "Porto Alegre";
    }
    if($texto == 'Rondônia'){
        echo "Porto Velho";
    }
    if($texto == 'Roraima'){
        echo "Boa Vista";
    }
    if($texto == 'Santa Catarina'){
        echo "Florianópolis";
    }
    if($texto == 'São Paulo'){
        echo "São Paulo";
    }
    if($texto == 'Sergipe'){
        echo "Aracaju";
    }
    if($texto == 'Tocantins'){
        echo "Palmas";
    }
    if($texto == 'Distrito Federal'){
        echo "Brasília";
    }
    ?>
</body>
</html>