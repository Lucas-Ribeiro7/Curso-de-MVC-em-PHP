            <div class="base-home">
                <h1 class="titulo">Lista de Clientes</h1>
                <div class="base-lista pesquisa">
                    <span class="qtde">Sua Busca retornou X Clientes</span>
                    <div class="tabela">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th colspan="2">Alterar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($clientes as $cliente){ ?>
                                <tr>
                                    <td>Exemplo 1 - Lucas</td>
                                    <td>Exemplo 1 - lucas@gmail.com</td>
                                    <td>Exemplo 1 - 20502010202</td>
                                    <td>
                                        <a href="" class="btn editar">Editar</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn excluir">Excluir</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <ul class="paginacao">
                        <li><a href="" class="primeiro">Primeiro</a></li>
                        <li><a href="" class="ant"></a></li>
                        <li class="ativo">1</li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="" class="prox"></a></li>
                        <li><a href="" class="ultimo">Ultimo</a></li>
                    </ul>
                </div>
            </div>