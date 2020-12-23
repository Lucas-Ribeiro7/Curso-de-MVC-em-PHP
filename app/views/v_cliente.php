<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de MVC</title>
</head>
<body>
    <h2>Curso de MVC</h2>
    <p>Aprendendo sobre MVC com PHP</p>
    <p>Vamos ver os Clientes</p>

        <?php
            foreach ($clientes as $cliente){
                echo $cliente['nome'] . "<br>";
            }
        ?>
</body>
</html>
