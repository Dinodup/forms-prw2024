<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação</title>
</head>
<body>
    <h1>Saudação</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $time = $_POST["time"];
        
        list($hour, $minute) = explode(':', $time);

        $hour = (int)$hour;

        if ($hour < 12) {
            $greeting = "Bom dia";
        } elseif ($hour < 18) {
            $greeting = "Boa tarde";
        } else {
            $greeting = "Boa noite";
        }

        echo "<p>$greeting, $name!</p>";
    }
    ?>
</body>
</html>
