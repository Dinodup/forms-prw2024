<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens da Pasta</title>
</head>
<body>
    <h1>Imagens da Pasta</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $folder = htmlspecialchars(trim($_POST["folder"]));
        $image_count = (int)$_POST["image_count"];
        
        // Verificar se a pasta existe
        $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder;
        if (!is_dir($path)) {
            echo "<p>Pasta não encontrada: $folder</p>";
            exit;
        }
        
        echo "<table border='1'>";
        echo "<tr>";
        
        // Exibir imagens
        for ($i = 1; $i <= $image_count; $i++) {
            $image_path = $path . '/' . $i . '.jpg';
            if (file_exists($image_path)) {
                echo "<td><img src='/$folder/$i.jpg' width='150' height='100' alt='Imagem $i'></td>";
            } else {
                echo "<td>Imagem $i não encontrada</td>";
            }
        }

        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
