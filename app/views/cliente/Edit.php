<div class="base-home">
                <h1 class="titulo">Novo Cadastro</h1>
                <div class="base-formulario">
                    <form action="<?php echo URL_BASE . 'cliente/salvar' ?>" method="POST">
                        <label>Nome</label>
                        <input type="text" name="txt_nome" value="<?php echo $cliente->nome ?>" placeholder="Insira um Nome">
                        <label>Email</label>
                        <input type="text" name="txt_email" value="<?php echo $cliente->email ?>" placeholder="Insira um Email">
                        <label>Telefone</label>
                        <input type="text" name="txt_fone" value="<?php echo $cliente->telefone ?>" placeholder="Insira um Telefone">
                       
                        <input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente ?>">
                        <input type="submit" value="Editar" class="btn cad">
                        <input type="reset" value="Limpar" class="btn limpar">
                    </form>
                </div>
            </div>