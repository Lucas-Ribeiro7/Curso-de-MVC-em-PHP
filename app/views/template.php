<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_BASE . 'assets/css/estilo.css'?>">
    <script type="text/javascript" src="js/jquery-min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <title>Sistema de Cadastro</title>
</head>
<body>
    <div class="conteudo">
        <div class="base-central">
        
            <?php include 'cabecalho.php'; ?>

            <?php $this->load($view, $viewData); ?> 

            <?php include 'rodape.php'; ?>

        </div>
    </div>
</body>
</html>