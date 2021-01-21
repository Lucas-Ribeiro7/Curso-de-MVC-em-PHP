            <div class="base-home">
                <h1 class="titulo">Lista de Clientes</h1>
                <div class="base-lista">
                <span class="qtde"><?php echo count($clientes);?> Clientes Cadastrados</span>
                    <div class="tabela">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Ativo</th>
                                    <th colspan="2">Alterar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($clientes as $cliente){ ?>
                                <tr>
                                    <td><?php echo $cliente->nome; ?></td>
                                    <td><?php echo $cliente->email; ?></td>
                                    <td><?php echo $cliente->telefone; ?></td>
                                    <td><?php echo $cliente->ativo; ?></td>
                                    <td>
                                        <a href="<?php echo URL_BASE . 'cliente/edit/' . $cliente->id_cliente; ?>" class="btn editar">Editar</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo URL_BASE . 'cliente/delete/' . $cliente->id_cliente; ?>" class="btn excluir">Excluir</a>
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