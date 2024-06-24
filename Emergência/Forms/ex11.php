<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Arrecadado</title>
</head>
<body>
    <h1>Resultado da Venda</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter as quantidades de camisetas do formulário
        $smallQty = (int)$_POST["small"];
        $mediumQty = (int)$_POST["medium"];
        $largeQty = (int)$_POST["large"];
        
        // Definir os preços das camisetas
        $priceSmall = 10.00;
        $priceMedium = 12.00;
        $priceLarge = 15.00;
        
        // Calcular o valor total arrecadado
        $total = ($smallQty * $priceSmall) + ($mediumQty * $priceMedium) + ($largeQty * $priceLarge);
        
        // Exibir o valor total arrecadado
        echo "<p>O valor total arrecadado é: R$ " . number_format($total, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
