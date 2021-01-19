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
            <div class="base-topo">
                <a href="index.html" class="logo"></a>
                <form action="lst_pesquisa.html" method="POST" class="busca">
                    <input type="text" name="" placeholder="Pesquisa">
                    <input type="submit" value="" class="but">
                </form>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="frm_cadastro.html">Cadastrar Novo</a></li>
                    <li><a href="lst_cliente.html">Lista de Contatos</a></li>
                    <li><a href="frm_cadastro.html">Editar</a></li>
		            <li><a href="frm_cadastro.html">Exluir</a></li>
                </ul>
            </nav>
            <div class="base-home">
                <h1 class="titulo">Seja Bem Vindo</h1>
                <div class="base-colunas">
                    <div>
                        <a href="frm_cadastro.html" class="col">
                            <i class="icone ico1"></i>
                            <span><b>Novo</b> Cadastro</span>
                        </a>

                        <a href="lst_cliente.html" class="col">
                            <i class="icone ico2"></i>
                            <span><b>Lista</b> de Contatos</span>
                        </a>

                        <a href="frm_cadastro.html" class="col">
                            <i class="icone ico3"></i>
                            <span><b>Editar</b> Contatos</span>
                        </a>

                        <a href="frm_cadastro.html" class="col">
                            <i class="icone ico4"></i>
                            <span><b>Excluir</b> Contatos</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="base-rodape">
                <p>Direitos Reservados: Lucas Ribeiro</p>
            </div>

        </div>
    </div>
</body>
</html>