<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Cadastro</title>
</head>
<body>
    <h1>Resultado da Validação</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prontuario = trim($_POST["prontuario"]);
        $nome = trim($_POST["nome"]);
        $idade = (int)$_POST["idade"];
        $periodo = strtoupper(trim($_POST["periodo"]));
        $modulo = (int)$_POST["modulo"];
        
        $errors = [];

        // Validação do prontuário
        if (empty($prontuario)) {
            $errors[] = "Prontuário não pode estar em branco.";
        }

        // Validação do nome
        if (empty($nome)) {
            $errors[] = "Nome não pode estar em branco.";
        }

        // Validação da idade
        if ($idade < 15 || $idade > 75) {
            $errors[] = "Idade deve ser um valor entre 15 e 75 anos.";
        }

        // Validação do período
        if ($periodo !== 'V' && $periodo !== 'N') {
            $errors[] = "Período deve ser V para Vespertino ou N para Noturno.";
        }

        // Validação do módulo
        if ($modulo < 1 || $modulo > 4) {
            $errors[] = "Módulo deve ser um valor entre 1 e 4.";
        }

        // Exibir os resultados da validação
        if (empty($errors)) {
            echo "<p>Todos os campos foram validados com sucesso.</p>";
        } else {
            echo "<p>Erros encontrados:</p>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
